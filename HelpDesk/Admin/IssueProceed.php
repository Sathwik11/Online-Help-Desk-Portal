<?php
session_start();

$ADMINNAME=$_SESSION['ADMINNAME'];

$con=mysqli_connect("localhost","root","root","db1");
$sno=(int)mysqli_real_escape_string($con,$_POST["button1"]);
$status=mysqli_real_escape_string($con,$_POST["STATUS"]);
$sol=mysqli_real_escape_string($con,$_POST["ISSOL"]);

if($status!=0)
{

$sql="Update ISSUESDETAILS set STATUS='$status',ISSOL='$sol' ,CONADMIN='$ADMINNAME' where SNO='$sno'";

}
else
{

$sql="Update ISSUESDETAILS set STATUS='$status',ISSOL='$sol' ,CONADMIN='no' where SNO='$sno'";


}

if(!mysqli_query($con,$sql))
{
echo "error";
die('Error'.mysqli_error($con));
}
else
{
header("Refresh: 0; url=http://localhost/HelpDesk/Admin/IssueDisplay.php");
}


?>
