<?php
session_start();

$con=mysqli_connect("localhost","root","root","db1");

$USNAME=mysqli_real_escape_string($con,$_POST["USNAME"]);

$PASSWORD=mysqli_real_escape_string($con,$_POST["PASSWORD"]);

$REPASSWORD=mysqli_real_escape_string($con,$_POST["REPASSWORD"]);

$IP=mysqli_real_escape_string($con,$_POST["IP1"]).".".mysqli_real_escape_string($con,$_POST["IP2"]).".".mysqli_real_escape_string($con,$_POST["IP3"]).".".mysqli_real_escape_string($con,$_POST["IP4"]);

$MAC=mysqli_real_escape_string($con,$_POST["MAC1"])."-".mysqli_real_escape_string($con,$_POST["MAC2"])."-".mysqli_real_escape_string($con,$_POST["MAC3"])."-".mysqli_real_escape_string($con,$_POST["MAC4"])."-".mysqli_real_escape_string($con,$_POST["MAC5"])."-".mysqli_real_escape_string($con,$_POST["MAC6"]);

$PHNO=(int)mysqli_real_escape_string($con,$_POST["PHNO"]);

$result = mysqli_query($con,"SELECT * FROM USERLOGIN where USERNAME='$USNAME'");

if($row = mysqli_fetch_array($result))
{
include('Register.html');
?>

<center><br>**...UserName Already Exist...**<center>
<?php

}
else
{

if(strcmp($PASSWORD,$REPASSWORD)!=0) 
{
include('Register.html');
?>

<center><br>**...Password Do not match...**<center>
<?php

}

else
{
$sql="insert into USERLOGIN (USERNAME,PASSWORD,IP,MAC,PHNO) values ('$USNAME','$PASSWORD','$IP','$MAC','$PHNO')";

if(!mysqli_query($con,$sql))
{
echo "error";
die('Error  :'.mysqli_error($con));
}
else
{
include('Login.html');
?>

<center><br>**...You are Registered Successfully...**<center>
<?php

}


}

} ?>

