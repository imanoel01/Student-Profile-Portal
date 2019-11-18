<?php
include_once("config.php");
session_start();
if(isset($_SESSION['matricno'])){
    $matricno=$_SESSION['matricno'];
}
else{
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
   <H3>Contact</H3>  

   <ul>
   <li><a href="welcome.php">Welcome</a></li>
   <li><a href="#">Contact</a></li>
   <li><a href="about.php">About</a></li>
   <li><a href="service.php">Service</a></li>
   <li><a href="logout.php">Logout</a></li>
   <li><a href="medical.php">Medical</a></li>

   </ul>
</body>
</html>