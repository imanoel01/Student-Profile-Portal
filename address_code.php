
<?php
session_start();
include_once("config.php");
$matricno=$_SESSION['matricno'];
if(isset($_POST['Submit'])) {
    $paddress=$_POST['paddress'];
    $pcity=$_POST['pcity'];
    $pstate=$_POST['pstate'];
    $pstatus=1;

    $taddress=$_POST['taddress'];
    $tcity=$_POST['tcity'];
    $tstate=$_POST['tstate'];
    $tstatus=2;

$query= mysqli_query($mysqli,"select * from addresstbl where Matricno='$matricno'");

if(mysqli_num_rows($query)<1){

    $query1= mysqli_query($mysqli,"insert into addresstbl(Address,City,State,Matricno,Status) 
    values('$paddress','$pcity','$pstate','$matricno','$pstatus'), 
    ('$taddress','$tcity','$tstate','$matricno','$tstatus')");

    $executionstatus= "successfull";
    if($query1){
        header("Location: address.php");
    }
}
$executionstatus= "unsuccessfull";
echo "Error: ". "<br>" . mysqli_error($mysqli);

}
?>