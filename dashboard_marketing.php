<?php include('header_dashboard.php');?>
<div class="home_content">
    <section class="layout_padding">
         <div class="container">
            <div class="row">
               <div class="full comment_form">                     
                    <h2>Marketing Header Section</h2>
                     <form method="post" enctype='multipart/form-data' class="dashborad_form" >
                        <fieldset>
                           <div class="col-md-12 dashboard_fields">
                              <div class="row">
                                 <div class="col-md-12">
                                 <label>Title</label>   
                                    <input type="text" name="marketing_title">
                                 <label>Image</label>
                                    <input type="file" name="marketing_image">
                                 <label>Content</label>
                                    <textarea type="text" name="marketing_content" id="marketing_editor" rows="4" cols="50"></textarea>    
                                 </div>
                              </div>
                              <div class="row margin_top_30">
                                 <div class="col-md-12">
                                    <div class="center">
                                    <button type="submit" name="marketing_submit">Submit</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                     <?php
                              if(isset($_POST['marketing_submit']))
                              {
                                 $marketing_title   = $_POST['marketing_title'];
                                 $marketing_content = $_POST['marketing_content'];
                                 $marketing_image   = $_FILES['marketing_image']['name'];
                                 $tmp_dir = $_FILES['marketing_image']['tmp_name'];
                                 $dir     = 'uploads/';
      
                                 if(!empty($marketing_image))
                                 {
                                    move_uploaded_file($tmp_dir,$dir.$marketing_image);
                                 }
      
                                 $insert = "INSERT INTO marketing (marketing_title,marketing_content,marketing_image)values('$marketing_title','$marketing_content','$marketing_image')";
                                 $sql_query = mysqli_query($con,$insert);
                                 if($sql_query)
                                 {
                                    header('location:marketing.php');
      
                                 }else{
                                    echo 'your data not inserted';
                                 }
                              }
                     ?>
                    
                     <!-- for marketing body section -->

                     <h2>Marketing Body Section</h2>
                     <form method="post" enctype='multipart/form-data' class="dashborad_form" >
                        <fieldset>
                           <div class="col-md-12 dashboard_fields">
                              <div class="row">
                                 <div class="col-md-12">
                                    <label>Title</label>   
                                       <input type="text" name="marketing_body_title">
                                    <label>Image</label>
                                       <input type="file" name="marketing_body_image">
                                    <label>Content</label>
                                       <textarea type="text" name="marketing_body_content" id="marketing_body_editor" rows="4" cols="50"></textarea> 
                                 </div>
                              </div>
                              <div class="row margin_top_30">
                                 <div class="col-md-12">
                                    <div class="center">
                                    <button type="submit" name="marketing_body_submit">Submit</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                           
                           <?php
                              if(isset($_POST['marketing_body_submit']))
                              {
                                 $marketing_body_title   = $_POST['marketing_body_title'];
                                 $marketing_body_content = $_POST['marketing_body_content'];
                                 $marketing_body_image   = $_FILES['marketing_body_image']['name'];
                                 $tmp_dir = $_FILES['marketing_body_image']['tmp_name'];
                                 $dir     = 'uploads/';
      
                                 if(!empty($marketing_body_image))
                                 {
                                    move_uploaded_file($tmp_dir,$dir.$marketing_body_image);
                                 }
      
                                 $insert = "INSERT INTO marketing_body_section (marketing_body_title,marketing_body_content,marketing_body_image)values('$marketing_body_title','$marketing_body_content','$marketing_body_image')";
                                 $sql_query = mysqli_query($con,$insert);
                                 if($sql_query)
                                 {
                                    header('location:marketing.php');
      
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
                 