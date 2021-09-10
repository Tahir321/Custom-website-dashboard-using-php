
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css_login/style.css">
   
    <?php 
        $con = mysqli_connect('localhost','root','','bad_days');
    ?>

</head>
<body class="img js-fullheight" style="background-image: url(images_login/warriors-the-legends-bg.jpg);">
<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">LOGIN DASHBOARD</h3>
		      	<form method="post" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" name="email" placeholder="Email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="login" class="form-control btn btn-primary submit px-3">Login</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

<!--     
<section class="layout_padding">
         <div class="container">
            <div class="row">
                  <div class="full comment_form">    
                        <h2>Login</h2>
                            <form method="post" class="dashborad_form" >
                           
                                <div class="col-md-12 dashboard_fields">
                                    <div class="row">
                                        <div class="col-md-12">
                                        <label>Email</label>
                                        <input type="text" name="email" value="">
                                        <label>Password</label>
                                        <input type="text" name="password" value="">
                                        </div>
                                    </div>
                                    <div class="row margin_top_30">
                                        <div class="col-md-12">
                                        <div class="center">
                                        <button type="submit" name="login">login</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                         
                            </form> -->
                                <?php
                                if(isset($_POST['login']))
                                {
                                    $email    = $_POST['email'];
                                    $password = $_POST['password'];
                                    
                                    $check = mysqli_query($con,"select * from admin_login where email = '$email' and password = '$password'");

                                    if(mysqli_num_rows($check) == 1)
                                    {
                                    $fetch = mysqli_fetch_array($check);

                                    session_start();
                                    $_SESSION['id']         = $fetch['id'];
                                    $_SESSION['email']      = $fetch['email'];
                                    $_SESSION['password']      = $fetch['password'];

                                        header('location:index_dashboard.php');             
                                    }
                                    else
                                    {
                                    echo '<p class="alert alert-danger">Invalid Email or Password</p>';
                                    }
                                }
                                
                                ?>
                <!-- </section></div></div></div> -->
  <script src="js_login/jquery.min.js"></script>
  <script src="js_login/popper.js"></script>
  <script src="js_login/bootstrap.min.js"></script>
  <script src="js_login/main.js"></script>
</body>
</html>
