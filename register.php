<?php
session_start();
session_destroy();
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$matricno=$_POST['matricno'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];



		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO biodata (Matricno,Firstname,Middlename,Lastname,Email,Phone,DOB,Password,Gender) VALUES('$matricno','$firstname','$middlename','$lastname','$email','$phone','$dob','$password','$gender')");
		
		if($result){
		 header("Location: login.php");
			// Show message when user added
			// echo "User added successfully. <a href='index.php'>View Users</a>";
			
	}
	else{
		echo "Error: ". "<br>" . mysqli_error($mysqli);
	}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Student | Registration</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="css/app.css" rel="stylesheet"/>
    <!-- end of global css -->
    <!-- page level css -->
    <link href="vendors/iCheck/css/all.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <link rel="stylesheet" type="text/css" href="css/form_layouts.css">

	<link rel="stylesheet" href="css/passtrength/passtrength.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="vendors/sweetalert2/css/sweetalert2.min.css"/>
    <link href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom_css/skins/skin-default.css" type="text/css" id="skin"/>
    <link rel="stylesheet" href="css/custom_css/form2.css"/>
    <link rel="stylesheet" href="css/custom_css/form3.css"/>
</head>

<body>
<header class="header">
    <nav class="navbar navbar-static-top" role="navigation">
	<H4><a href="welcome.php" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <!-- <img src="img/logo.png" alt="logo"/> -->
            GROUP A
        </a></H4>
        <!-- Header Navbar: style can be found in header-->
        <!-- Sidebar toggle button-->
        <!-- Sidebar toggle button-->
        
        
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    
    <aside class="">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>
                Registration
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="login.php">
                        <i class="fa fa-fw ti-home"></i> Student
                    </a>
                </li>
                <li>
                    <a href="#">Registration</a>
                </li>
                <!-- <li>
                    Form Layouts
                </li> -->
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <div class="row">
                
                                
                              
                                <div class="col-lg-12">
                                    <div class="panel ">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <i class="fa fa-fw ti-pencil"></i> Registration
                                            </h3>
                                            <span class="pull-right hidden-xs">
                                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                                                </span>
                                        </div>
                                        <div class="panel-body">
                                            <form action="register.php" method="post" class="form-horizontal">
                                                
												
                                                <div class="form-body">
												<!-- Form Fieleds -->
												
												<!-- Firstname -->
                                                    <div class="form-group m-t-10">
                                                        <label for="val-fname" class="col-md-3 control-label">
                                                            Firstname
															<span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa fa-fw ti-user"></i>
                                                                    </span>
                                                                <input type="text" name="firstname" id="val-fname" class="form-control"
                                                                       placeholder="Firstname" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
													<!-- Middlename -->
                                                    <div class="form-group">
                                                        <label for="val-mname" class="col-md-3 control-label">
                                                            Middlename
															<span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa ti-user"></i>
                                                                    </span>
                                                                <input type="text" name="middlename" placeholder="Middlename"
                                                                      id="val-mname" class="form-control" required="required"/>
                                                            </div>
                                                        </div>
                                                    </div>
													<!-- Lastname -->
                                                    <div class="form-group">
                                                        <label for="val-lname" class="col-md-3 control-label">
                                                            Lastname
															<span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa fa-fw ti-user"></i>
                                                                    </span>
                                                                <input type="text" name="lastname" placeholder="Lastname"
                                                                       id="val-lname" class="form-control" required="required"/>
                                                            </div>
                                                        </div>
                                                    </div>
													<!-- Email -->
                                                    <div class="form-group">
                                                        <label for="val-email" class="col-md-3 control-label">
                                                            Email
															<span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa fa-fw ti-email"></i>
                                                                    </span>
                                                                <input type="text" name="email" id="val-email" placeholder="Email"
                                                                       class="form-control" required="required"/>
                                                            </div>
                                                        </div>
                                                    </div>
													<!-- Phone -->
                                                    <div class="form-group">
                                                        <label for="val-phone" class="col-md-3 control-label">
                                                            Phone
															<span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa fa-fw ti-mobile"></i>
                                                                    </span>
                                                                <input type="phone" name="phone" class="form-control"
                                                                       placeholder="Phone" required="val-phone">
                                                            </div>
                                                        </div>
                                                    </div>
													<!-- DOB -->
                                                    <div class="form-group">
                                                        <label for="val-dob" class="col-md-3 control-label">
                                                            DOB
															<span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa fa-fw ti-pencil"></i>
                                                                    </span>
                                                                <input type="text" name="dob" class="form-control"
                                                                  id="val-dob"     placeholder="DOB" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
													<!-- Gender -->
													<div class="form-group">
                                                        <label for="inputAddress" class="col-md-3 control-label">
                                                            Gender
															<span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-md-6">
                                                            <div class="input-group">
															<label class="radio-inline iradio">
                                            <input type="radio"  name="gender" value="Male">
                                            &nbsp;&nbsp;&nbsp;&nbsp;Male
                                        </label>
                                        <label class="radio-inline iradio ">
                                            <input type="radio"  name="gender" value="Female">
                                            &nbsp;&nbsp;&nbsp;&nbsp;Female
                                        </label>
                                                            </div>
                                                        </div>
                                                    </div>
													<!-- MatricNo -->
													<div class="form-group">
                                                        <label for="val-matricno" class="col-md-3 control-label">
                                                            Matric No.
															<span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa ti-mobile"></i>
                                                                    </span>
                                                                <input type="text" name="matricno" placeholder="MatricNo:"
                                                                      id="val-matricno" class="form-control" required="required"/>
                                                            </div>
                                                        </div>
                                                    </div>

													<!-- Password -->
                                                    <div class="form-group">
                                                        <label for="val-password" class="col-md-3 control-label">
                                                            Password
															<span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa fa-fw ti-key"></i>
                                                                    </span>
                                                                <input type="password" placeholder="Password"
                                                                    name="password" required="required"  id="val-password" class="form-control"/>
                                                            </div>
                                                        </div>
                                                    </div>
													<!-- Confirm Password -->
                                                    <div class="form-group">
                                                        <label for="val-confirmpassword" class="col-md-3 control-label">
                                                            Confirm Password
															<span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                        <i class="fa fa-fw ti-key"></i>
                                                                    </span>
                                                                <input type="password" required="required" id="val-confirmpassword" placeholder="Confirm Password"
                                                                       class="form-control"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="">
                                                    <div class="row">
                                                        <div class="col-md-12 text-center">
														<input type="submit" name="Submit" value="Create" class="btn btn-primary">
                                                            &nbsp;
                                                            <button type="button" class="btn btn-danger">Cancel
                                                            </button>
                                                            &nbsp;
                                                            <button type="reset" class="btn btn-default bttn_reset">
                                                                Reset
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                              
                    </div>
                </div>
            </div>
            <!--rightside bar -->
            
            <div class="background-overlay"></div>
        </section>
        <!-- /.content -->
    </aside>
    <!-- /.right-side -->
</div>











<script type="text/javascript" src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="vendors/bootstrap-maxlength/js/bootstrap-maxlength.js"></script>
<script type="text/javascript" src="vendors/sweetalert2/js/sweetalert2.min.js"></script>
<script type="text/javascript" src="vendors/card/jquery.card.js"></script>
<script type="text/javascript" src="vendors/iCheck/js/icheck.js"></script>
<script src="js/passtrength/passtrength.js"></script>
<script type="text/javascript" src="js/custom_js/form2.js"></script>
<script type="text/javascript" src="js/custom_js/form3.js"></script>
<script type="text/javascript" src="js/custom_js/form_validations.js"></script>


<!-- 
	<form action="register.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>FirstName</td>
				<td><input type="text" name="firstname"></td>
			</tr>
			<tr> 
				<td>Middlename</td>
				<td><input type="text" name="middlename"></td>
			</tr>
			<tr> 
				<td>Lastname</td>
				<td><input type="text" name="lastname"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Phone</td>
				<td><input type="text" name="phone"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr> 
				<td>MatricNo</td>
				<td><input type="text" name="matricno"></td>
			</tr>
			<tr> 
				<td>Date</td>
				<td><input type="text" name="dob"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	 -->
	
</body>
</html>
