<?php
date_default_timezone_set('Asia/Calcutta');

session_start();

$USERNAME=$_SESSION['USERNAME'];
$Date2=(String)(date('Y'));
$Date3=(String)(date('m'));
$Date4=(String)(date('d'));

$Date5=(String)(date('h'));
$Date6=(String)(date('i'));
$Date7=(String)(date('s'));
$Date8=(String)(date('A'));



$Date1=$Date2."-".$Date3."-".$Date4."  ".$Date5.":".$Date6.":".$Date7."  ".$Date8;


$con=mysqli_connect("localhost","root","root","db1");
$ISTYPE=mysqli_real_escape_string($con,$_POST["ISTYPE1"]);

$ISDES=mysqli_real_escape_string($con,$_POST["ISDES"]);

$sql="insert into ISSUESDETAILS (ISTYPE,USERNAME,ISDES,Date) values ('$ISTYPE','$USERNAME','$ISDES','$Date1')";

if(!mysqli_query($con,$sql))
{
echo "error";
die('Error'.mysqli_error($con));
}
else
{
?>
   <center><h2>Your Issue Successfully Posted........</h2></center>
<?php
header("Refresh: 0; url=http://localhost/HelpDesk/User/IssuesList.php");
}


?>