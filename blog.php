
   <?php include('header.php');$con = mysqli_connect('localhost','root','','bad_days');$query = mysqli_query($con,"select * from blog ");$query_commnent = mysqli_query($con,"select * from comments ");?>
      <!-- revolution slider -->
      
      <div class="Blog-bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="Blogheading">
                     <h3>Blog </h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- section --> 
      <div class="section layout_padding blog_blue_bg light_silver">
         <?php while($fetch = mysqli_fetch_array($query))
      {?>
         <div class="container"> 
            <div class="row my-block">
               <div class="col-md-8 offset-md-2">
                  <div class="full">
                     <div class="big_blog">
                        <img class="img-responsive" src="uploads/<?php echo $fetch['image'];?>" alt="#" />
                     </div>
                     <div class="blog_cont_2">
                        <h3><?php echo $fetch['title'];?></h3>
                        <p><?php echo $fetch['content'];?></p>
                  </div>
               </div>
            </div>
         </div>
         <?php }?>
      </div>
      <!-- end section -->

<!-- section -->
      <section class="layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="heading" style="padding-left: 15px;padding-right: 15px;">
                     <h4 style="border-bottom: solid #333 1px;">Comments / 2</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">


               <?php while($fetch_comment = mysqli_fetch_array($query_commnent))
               {?>
                  <div class="full comment_blog_line">
                     <div class="row">
                        <div class="col-md-1">
                           <img src="images/c_1.png" alt="#" />
                        </div>
                        <div class="col-md-9">
                           <div class="full contact_text">
                              <h3><?php echo $fetch_comment['name'];?></h3>
                              <h4>Posted on Jan 10 / 2017 at 06:53 am</h4>
                              <p><?php echo $fetch_comment['comment']; ?></p>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <a class="reply_bt" href="#">Reply</a>
                        </div>
                     </div>
                  </div>
               <?php } ?>



               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-12 margin_top_30">
                  <div class="heading" style="padding-left: 15px;padding-right: 15px;">
                     <h4>Post : Your Comment</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="full comment_form">
                     <form method="post">
                        <fieldset>
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Name" required="#" />
                                    <input type="email" name="email" placeholder="Email" required="#" />
                                 </div>
                                 <div class="col-md-6">
                                    <textarea placeholder="Comment" name="comment"></textarea>
                                 </div>
                              </div>
                              <div class="row margin_top_30">
                                 <div class="col-md-12">
                                    <div class="center">
                                       <button type="submit" name="submit">Send</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
      
      <?php
       include('footer.php');
      ?>
      