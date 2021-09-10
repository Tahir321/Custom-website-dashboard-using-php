<?php 

    include('header.php');
             $con = mysqli_connect('localhost','root','','bad_days');
            // for marketing header 
            $query = mysqli_query($con,"select * from marketing");
            while($marketing_fetch = mysqli_fetch_array($query))
            {
                $marketing_title = $marketing_fetch['marketing_title'];
                $marketing_content = $marketing_fetch['marketing_content'];
                $marketing_image = $marketing_fetch['marketing_image'];

            }

            // for marketing body 
            $query_marketing_body = mysqli_query($con,"select * from marketing_body_section");
            while($marketing_body_fetch = mysqli_fetch_array($query_marketing_body))
            {
                $marketing_body_title = $marketing_body_fetch['marketing_body_title'];
                $marketing_body_content = $marketing_body_fetch['marketing_body_content'];
                $marketing_body_image = $marketing_body_fetch['marketing_body_image'];

            }

?>

<div class="Marketing-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="Marketingheading">
               <h3>Marketing</h3>
            </div>
         </div>
      </div>
   </div>
</div>
      <!-- section --> 
      <div class="section layout_padding dark_bg">
         <div class="container">
            
            <div class="row">
               <div class="col-md-6">
                  <img src="uploads/<?php echo $marketing_image?>" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h3 class="white_font"><?php echo $marketing_title?></h3>
                     <p class="white_font"><?php echo $marketing_content?></p>
                  </div>
               </div>
            </div>
            
            </div>
         </div>
      </div>
      <!-- end section -->

       <!-- section --> 
      <div class="section layout_padding">
         <div class="container">
            
            <div class="row">
   <div class="col-md-6">
                  <div class="full blog_cont">
                     <h3><?php echo $marketing_body_title?></h3>
                     <h5>March 19 2019 5 READ</h5>
                     <p><?php echo $marketing_body_content?></p>
                  </div>
               </div>
               <div class="col-md-6">
                  <img src="uploads/<?php echo $marketing_body_image?>" alt="#" />
               </div>
               
            </div>
         </div>
      </div>
      <!-- end section -->
      <?php 

    include('footer.php');

?>