

    <?php

    include('header.php');

    $con = mysqli_connect('localhost','root','','bad_days');
    $about_details = mysqli_query($con,"select * from about_us");
    ?>


      <!-- section --> 
<div class="About-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="aboutheading">
               <h3>About <span class="orange_color">Us</span></h3>
            </div>
         </div>
      </div>
   </div>
</div>



      <div class="section layout_padding">
         <div class="container">
           



<?php
         while($fetch = mysqli_fetch_array($about_details))
            {
?>
            <div class="row my-block">
               <div class="col-md-6">
                  <img src="uploads/<?php echo $fetch['about_image'];?>" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4><?php echo $fetch['about_title'];?></h4>
                     <h5>MAY 14 2019 5 READ</h5>
                     <p><?php echo $fetch['about_content'];?></p>
                  </div>
               </div>
            </div>
            
<?php } ?>

            <div class="row margin_top_30">
               <div class="col-md-12">
                  <div class="button_section full center margin_top_30">
                     <a style="margin:0;" href="about.html">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
     
     <?php 
     include('footer.php');
     ?>