<html>
<head>
<link rel="stylesheet" types="text/css" href="S1.css">

<style>
.pos_fixed1
{
position:fixed;
top:10px;
right:30px;
}
</style>

</head>

<body>
<?php
session_start();
if(isset($_SESSION['ADMINNAME']))
{

?>


<center><h1>User  Details</h1></center>

<?php
$con=mysqli_connect("localhost","root","root","db1");


$USNAME=mysqli_real_escape_string($con,$_POST["Details"]);

$value=mysqli_real_escape_string($con,$_POST["button2"]);

$result = mysqli_query($con,"SELECT * FROM issuesdetails where SNO='$value'");

if($row = mysqli_fetch_array($result)) {

$USNAME=$row['USERNAME'];

}

$result = mysqli_query($con,"SELECT * FROM USERLOGIN where USERNAME='$USNAME'");

if($row = mysqli_fetch_array($result)) {
?>
<table cellpadding="10" border="0">

<tr>
<td><h3>User Name</h3></td>
<td><h3>:</h3></td>
<td><h3><?php echo $row['USERNAME'] ?></h3></td>
</tr>

<tr>
<td><h3>IP Address</h3></td>
<td><h3>:</h3></td>
<td><h3><?php echo $row['IP'] ?></h3></td>
</tr>

<tr>
<td><h3>MAC Address</h3></td>
<td><h3>:</h3></td>
<td><h3><?php echo $row['MAC'] ?></h3></td>
</tr>

<tr>
<td><h3>Phone Number</h3></td>
<td><h3>:</h3></td>
<td><h3><?php echo $row['PHNO'] ?></h3></td>
</tr>

</table>

<?php } ?>

<center>
<form action="IssueDescription.php" method="post">

<input type="hidden" name="button1" value=<?php echo $value ?> />

<input type="submit" name="Back" value="Back" class="b1">

</form>
</center>

<a href=AdminLogout.php class="pos_fixed1">Logout</a>
<?php }

else
{
header("Refresh: 0; url=http://localhost/HelpDesk/Admin/AdminAuthentication.html");
} ?>

</body>

</html>
