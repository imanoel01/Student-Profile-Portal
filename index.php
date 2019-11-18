<?php
session_start();
/**
* Simple PHP CRUD Script
* Developed by TutorialsClass.com
* URL:  http://tutorialsclass.com/code/php-simple-crud-application
**/

// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM biodata");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="register.php">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['Firstname']."</td>";
        echo "<td>".$user_data['Phone']."</td>";
        echo "<td>".$user_data['Matricno']."</td>";    
        // echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    // else{
    //     echo "Error: ". "<br>" . mysqli_error($mysqli);
    // }
    ?>
    </table>
</body>
</html>
