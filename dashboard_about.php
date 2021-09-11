<?php include('header_dashboard.php');?>
<div class="home_content">
    <section class="layout_padding">
         <div class="container">
          <div class="dashboard_card_about">
            <div class="row">
               <div class="full comment_form">
               <!-- about us data insert in database   -->
                <h2>About us details</h2>
                  <form method="post" enctype='multipart/form-data' class="dashborad_form" >
                     <fieldset>
                        <div class="col-md-12 dashboard_fields">
                           <div class="row">
                              <div class="col-md-12">
                              <label>Title</label>   
                                 <input type="text" name="about_title">
                              <label>Image</label>
                                 <input type="file" name="about_image">
                              <label>Content</label>
                                 <textarea type="text" name="about_content" id="about_editor" rows="4" cols="50"></textarea> 
                              </div>
                           </div>
                           <div class="row margin_top_30">
                              <div class="col-md-12">
                                 <div class="center">
                                 <button type="submit" name="about_submit">Submit</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </fieldset>
                  </form>
                        
                        <?php
                           if(isset($_POST['about_submit']))
                           {
                              $about_title   = $_POST['about_title'];
                              $about_content = $_POST['about_content'];
                              $about_image   = $_FILES['about_image']['name'];
                              $tmp_dir = $_FILES['about_image']['tmp_name'];
                              $dir     = 'uploads/';

                              if(!empty($about_image))
                              {
                                 move_uploaded_file($tmp_dir,$dir.$about_image);
                              }

                              $insert = "INSERT INTO about_us (about_title,about_content,about_image)values('$about_title','$about_content','$about_image')";
                              $sql_query = mysqli_query($con,$insert);
                              if($sql_query)
                              {
                                 header('location:about.php');

                              }else{
                                 echo 'your data not inserted';
                              }

                           }
                        ?>
                      </div>
                  </div>
             </div>        
      </section>        
</div>
    <?php include('footer_dashboard.php');?>