<?php 
include('connection.php');
$blog_query = mysqli_query($con,"select * from blog");
$blog_query_dashboard = mysqli_query($con,"select * from blog");
$query = mysqli_query($con,"select * from contact_us");
$contact_us = mysqli_query($con,"SELECT * from contact_us");
$blog = mysqli_query($con,"SELECT * from blog");
 // for about details 
 $about_details = mysqli_query($con,"select * from about_us");
 // for blog 
 while($blog_index_fetch = mysqli_fetch_array($blog_query_dashboard))
	 {
		 $blog_title = $blog_index_fetch['title'];
		 $blog_content = $blog_index_fetch['content'];
		 $blog_image = $blog_index_fetch['image'];

	 }
?>