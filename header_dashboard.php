<?php

session_start();
if(!isset($_SESSION['id']))
{
    header('location:admin_login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="css_dashboard/style.css" rel="stylesheet">
    <style>
            table {
            font-family: 'arial', sans-serif;
            border-collapse: collapse;
            width: 100%;
            }
            tr th{
               background-color: #25e8df;
               color:#ffff;
            }
            td, th {
            text-align: left;
            padding: 19px;
            font-size: 15px;
            }
            td img{
                width: 150px !important;
            }
            .th{
                border-top-left-radius: 30px;
            }
            .th2{
                border-top-right-radius: 30px;
            }
            tr:nth-child(even) {
            background-color: #ffff;
            }
      </style>
      <?php 
         ob_start();
        include('connection.php');
      ?>
</head>
<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i class="bx bxl-c-plus-plus"></i>
                <div class="logo_name">TA Dashboard</div>
            </div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <!-- dashboard menu -->
        <ul class="nav_list">
            <!-- <li>
                    <i class='bx bx-search'></i>
                    <input type="text" placeholder="Search...">
            </li> -->
            <li>
                <a href="index_dashboard.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="dashboard_blog.php">
                <i class='bx bxl-blogger'></i>
                    <span class="links_name">Add Blogs</span>
                </a>
                <span class="tooltip">Add Blogs</span>
            </li>
            <li>
                <a href="dashboard_about.php">
                    <i class='bx bxs-face'></i>
                    <span class='links_name'>Add About Details</span>
                </a>
                <span class="tooltip">Add About Details</span>
            </li>
            <li>
                <a href="dashboard_marketing.php">
                    <i class='bx bxl-mastodon'></i>
                    <span class="links_name">Add Marketing Details</span>
                </a>
                <span class="tooltip">Add Marketing Details</span>
            </li>
            <li>
                <a>
                    <i class='bx bx-folder'></i>
                    <span class="links_name">File Manager</span>
                </a>
                <span class="tooltip">File Manager</span>
            </li>
            <li>
                <a>
                    <i class='bx bx-cart-alt'></i>
                    <span class="links_name">Order</span>
                </a>
                <span class="tooltip">Order</span>
            </li>
            <li>
                <a>
                    <i class='bx bx-heart'></i>
                    <span class="links_name">Saved</span>
                </a>
                <span class="tooltip">Saved</span>
            </li>
            <li>
                <a>
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
                <span class="tooltip">Setting</span>
            </li>
        </ul>
        <!-- dashboard menu end -->
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                    <img src="images/counter-avtar3.png"> 
                    <div class="name_job">
                        <div class="name">Tahir Ali</div>
                        <div class="job">Web Developer</div>
                    </div>
                </div>
                <i class="bx bx-log-out" id="log_out"></i>
            </div>
        </div>
    </div>
   <div class="dashboard_header">
       <div class="admin_search">
        <form method="post" >
            <i class='bx bx-search'></i>
            <input type="text" id="searchBar" name="searchBar" class="search_header" placeholder="Search...">
            <button type="submit"></button>
        </form>
            <?php 
                $blog_for_search = mysqli_query($con,"select * from blog");
                $blog_for_search_fetch = mysqli_fetch_array($blog_for_search);
                if(isset($_POST['submit']))
                {
                    $name = $_POST['searchBar'];

                }    
            ?>
        </div>
        <div class="admin_logout">
           <i class='bx bx-user-circle'></i>
           <span class="admin-text">Admin</span>
           <a href="admin_logout.php"><span class="admin-text">Logout</span></a>
        </div> 
   </div>
   <script>
       const searchBar =  document.getElementById('searchBar');
       console.log(searchBar);
       searchBar.addEventListener('keyup',(e) => {
       console.log(e.target.value);
       });

   </script>
   