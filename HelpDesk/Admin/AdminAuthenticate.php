<?php
session_start();

$con=mysqli_connect("localhost","root","root","db1");

$ADNAME=mysqli_real_escape_string($con,$_POST["ADNAME"]);

$PASSWORD=mysqli_real_escape_string($con,$_POST["PASSWORD"]);

$result = mysqli_query($con,"SELECT * FROM ADMINLOGIN where ADMINNAME='$ADNAME' and PASSWORD='$PASSWORD'");


if($row = mysqli_fetch_array($result))
{

$_SESSION['ADMINNAME']=$ADNAME;
$_SESSION['STATUS']=0;
header("Refresh: 0; url=IssueDisplay.php");

}
else
{

include('AdminAuthentication.html');
?>

<center><br>**Wrong...Username or password...**<center>
<?php

}

?>
