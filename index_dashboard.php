<?php
 include('header_dashboard.php');
 include('function.php');
 ?>
<div class="home_content">
    <section class="layout_padding">
         <div class="container">
            <div class="dashboard_card">
               <!-- contact us detail -->
               <h2>Contact Us Details</h2>
               <?php if($contact_fetch = mysqli_fetch_array($contact_us)){ ?>
               <table>
                  <tr>
                     <th class="th">Name</th>
                     <th>Email</th>
                     <th>Subject</th>
                     <th>Comment</th>
                     <th class="th2">Delete</th>
                  </tr>
               

                  <?php  while($contact_us_fetch = mysqli_fetch_array($query)){?>
                  <tr>
                     <td><?php echo $contact_us_fetch['name']?></td>
                     <td><?php echo $contact_us_fetch['email']?></td>
                     <td><?php echo $contact_us_fetch['subject']?></td>
                     <td><?php echo $contact_us_fetch['comment']?></td>
                     <td><a class='delete' href="delete.php?id=<?php echo $contact_us_fetch['id']?>"><span class="delete_btn">Delete<span></a></td>
                  </tr>
                  <?php }?>
               </table>
             <?php }else{ echo 'details not submit';}?>
            </div>
               <!-- Blogs -->
               <div class="dashboard_card">
               <h2>Blogs</h2>
               <?php if($blog_details = mysqli_fetch_array($blog)){ ?>

               <table>
                  <tr>
                     <th class="th">Images</th>
                     <th>Title</th>
                     <th class="th2">Edit & Delete</th>
                  </tr>
                  <?php
                    while($blog_fetch = mysqli_fetch_array($blog_query))
                  {?>
                  <tr>
                     <td><img src="uploads/<?php echo $blog_fetch['image']?>"></td>
                     <td><?php echo $blog_fetch['title']?></td>

                     <td><a href="dashboard_blog.php?id=<?php echo $blog_fetch['id']?>">Edit</a> | <a class='delete' href="delete.php?id=<?php echo $blog_fetch['id']?>">Delete</a></td>
                  </tr>
                  <?php }?>
               </table>
               <?php }else{ echo 'details not submit';}?>
               </div>      
            </div>
         </div>
      </section>
    </div>
<?php include('footer_dashboard.php');?>