<?php
session_start();

$con=mysqli_connect("localhost","root","root","db1");

$USNAME=mysqli_real_escape_string($con,$_POST["USNAME"]);

$PASSWORD=mysqli_real_escape_string($con,$_POST["PASSWORD"]);

$result = mysqli_query($con,"SELECT * FROM USERLOGIN where USERNAME='$USNAME' and PASSWORD='$PASSWORD'");

if($row = mysqli_fetch_array($result))
{

$_SESSION['USERNAME']=$USNAME;

header("Refresh: 0; url=IssuesList.php");

}
else
{

include('Login.html');
?>

<center><br>**Wrong...Username or password...**<center>
<?php

}

?>

