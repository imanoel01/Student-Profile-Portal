<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$matricno = $_POST['matricno'];
		$password = $_POST['password'];

		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "select * from biodata where Matricno='$matricno' and Password='$password'");
		if (mysqli_num_rows($result) > 0) {

			while($row = mysqli_fetch_assoc($result)){
				$matricno=$row['Matricno'];
				session_start();
				$_SESSION['matricno']=$matricno;
			}
		header("Location: welcome.php");
		// Show message when user added
        // echo "User added successfully. <a href='index.php'>View Users</a>";
        
        session_start();
        $_SESSION['name']=$matricno;;
    }
    else{
		// header("Location:login.php");
		echo "Error: ". "<br>" . mysqli_error($mysqli);
    }}

	?><!DOCTYPE html>
<html lang="en">
<head>
<title> Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- end of bootstrap -->
    <!--page level css -->
    <link type="text/css" href="vendors/themify/css/themify-icons.css" rel="stylesheet"/>
    <link href="vendors/iCheck/css/all.css" rel="stylesheet">
    <link href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css" rel="stylesheet"/>
    <link href="css/login.css" rel="stylesheet">
    <!--end page level css-->
</head>
<body>
<div class="preloader">
    <div class="loader_img"><img src="img/loader.gif" alt="loading..." height="64" width="64"></div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 login-form">
            <div class="panel-header">
                <h2 class="text-center">
                    <!-- <img src="img/pages/clear_black.png" alt="Logo"> -->
					 GROUP A
                </h2>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12">
                        <form action="login.php" id="authentication" method="post" class="login_validator">
                            <div class="form-group">
                                <label for="email" class="sr-only"> Matric No..</label>
                                <input type="text" class="form-control  form-control-lg" id="email" name="matricno"
                                       placeholder="Matric No.">
                            </div>
                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" class="form-control form-control-lg" id="password"
                                       name="password" placeholder="Password">
                            </div>
                            <div class="form-group checkbox">
                                <label for="remember">
                                    <input type="checkbox" name="remember" id="remember">&nbsp; Remember Me
                                </label>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="Submit" value="Sign In" class="btn btn-primary btn-block"/>
                            </div>
                            <a href="forgot_password.html" id="forgot" class="forgot"> Forgot Password ? </a>

                            <span class="pull-right sign-up">New ? <a href="register.php">Sign Up</a></span>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>



   
    
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!-- end of global js -->
<!-- page level js -->
<script type="text/javascript" src="vendors/iCheck/js/icheck.js"></script>
<script src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/custom_js/login.js"></script>
</body>
</html>