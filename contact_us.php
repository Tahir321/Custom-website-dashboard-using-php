
<?php include('header.php');?>
<?php include('connection.php')?>
<div class="contact-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="contactheading">
               <h3>contact Us</h3>
            </div>
         </div>
      </div>
   </div>
</div>
      <!-- section -->
      <section class="layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full comment_form">
                     <form method="post">
                        <fieldset>
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-6">
                                     <label>Name</label>
                                    <input type="text" name="name" placeholder="Name" required="#" />
                                    <label>Email</label>
                                    <input type="email" name="email" placeholder="Email" required="#" />
                                    <label>Subject</label>
                                    <input type="text" name="subject" placeholder="subject" required="#" />
                                 </div>
                                 <div class="col-md-6">
                                     <label>Comment</label>
                                    <textarea class="wdt" name="comment" placeholder="Comment"></textarea>
                                 </div>
                              </div>
                              <div class="row margin_top_30">
                                 <div class="col-md-12">
                                    <div class="center">
                                       <button type="submit" name="submit" >Submit</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                     <?php 
                        if(isset($_POST['submit']))
                        {
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $subject = $_POST['subject'];
                            $textarea = $_POST['comment'];
                            $insert = "INSERT INTO contact_us (name,email,subject,comment)values('$name','$email','$subject','$textarea')";
                            $sql_query = mysqli_query($con,$insert);
                            if($sql_query)
                            {
                                echo 'Your details submit';
                            }
                            else{
                               echo 'your data not submited';
                            }
                        }
                     ?>
                     
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
      <section>
         <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" style="padding: 0;">
                   <div class="map_section">
                     <div id="map">
                     </div>
                   </div>
                </div>
            </div>
         </div>
      </section>
      <?php include('footer.php');?>