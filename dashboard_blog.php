<?php 
    include('header_dashboard.php');
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $edit_query = mysqli_query($con,"select * from blog where id = '$id'");
        $fetch = mysqli_fetch_array($edit_query);
    }
?>

<div class="home_content">
    <section class="layout_padding">
         <div class="container">
            <div class="row">
                  <div class="full comment_form">
                     <h2>BlOGS</h2>
                     <form method="post" enctype='multipart/form-data' class="dashborad_form" >
                        <fieldset>
                           <div class="col-md-12 dashboard_fields">
                              <div class="row">
                                 <div class="col-md-12">
                                 <label>Title</label>
                                    <input type="text" name="title" value="<?php echo $fetch['title'] ?? null ?>">
                                <label>Content</label> 
                                    <textarea type="text" id="Article_editor" name="content"><?php echo $fetch['content'] ?? null ?></textarea> 
                                 <label>Image</label>
                                 <?php if(isset($fetch['image'])) { ?>
                                    <span><img src="uploads/<?php echo $fetch['image'] ?? null ?>" width="200px" height="200px"></span>
                                 <?php }?>
                                    <input type="file" name="image" value="<?php echo $fetch['image'] ?? null ?>">
                                 </div>
                              </div>
                              <div class="row margin_top_30">
                                 <div class="col-md-12">
                                    <div class="center">
                                    <button type="submit" name="submit">Submit</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                     <?php 
                     
                        $con = mysqli_connect('localhost','root','','bad_days');

                        // blog data insert in database

                        if(isset($_POST['submit']))
                        {
                           $title   = $_POST['title'];
                           $content = $_POST['content'];
                           $image   = $_FILES['image']['name'];
                           $tmp_dir = $_FILES['image']['tmp_name'];
                           $dir     = 'uploads/';

                           if(!empty($image))
                           {
                              move_uploaded_file($tmp_dir,$dir.$image);
                           }
                           if(isset($_GET['id']))
                           {
                               $sql_query = mysqli_query($con,"UPDATE blog SET title='$title',content='$content',image='$image' where id = '$id'");
                           }else{
                               $insert = "INSERT INTO blog (title,content,image)values('$title','$content','$image')";
                               $sql_query = mysqli_query($con,$insert);
                           }
                           if($sql_query)
                           {
                              header('location:blog.php');

                           }else{
                              echo 'your data not inserted';
                           }

                        }

                     ?>
                    </div>
             </div>
     </section>
 </div>
 <?php include('footer_dashboard.php');?>