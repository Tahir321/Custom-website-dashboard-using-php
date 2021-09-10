<?php

include('connection.php');
$id = $_GET['id']; // get id through query string
$del_blog = mysqli_query($con,"DELETE from blog where id = '$id'");
$del_contact = mysqli_query($con,"DELETE from contact_us where id = '$id'"); // delete query
if($del_blog || $del_contact )
{
    mysqli_close($con); // Close connection
    header('location:index_dashboard.php'); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>