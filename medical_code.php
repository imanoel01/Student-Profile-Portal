
<?php

session_start();
include_once("config.php");


$matricno=$_SESSION['matricno'];
if(isset($_POST['Submit'])) {
    $bloodgroup=$_POST['bloodgroup'];
    $genotype=$_POST['genotype'];
    $healthstatus=$_POST['healthstatus'];
    $allergies=$_POST['allergies'];

    $result= mysqli_query($mysqli,"select * from addresstbl where Matricno='$matricno'");
    if(mysqli_num_rows($query)<1){
        // $query2=mysqli_query($mysqli, "insert into medical(Matricno,Bloodgroup,Genotype,Healthstatus,Allergies)
        $result = mysqli_query($mysqli, "INSERT INTO medical (Matricno,Bloodgroup,Genotype,Healthstatus,Allergies) 
        VALUES('$matricno','$bloodgroup','$genotype','$healthstatus','$allergies')");
     
        if($result){
        header("Location: medical.php");       
        }
        else{
            echo "Error: ". "<br>" . mysqli_error($mysqli);
        }
    }
}
else{
    header("Location:login.php");

}
?>