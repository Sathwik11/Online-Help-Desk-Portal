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


<center><h1>Issue Description</h1></center>

<?php
$con=mysqli_connect("localhost","root","root","db1");


$value=mysqli_real_escape_string($con,$_POST["button1"]);

$result = mysqli_query($con,"SELECT * FROM issuesdetails where SNO='$value'");

if($row = mysqli_fetch_array($result)) {
?>
<form action="IssueProceed.php" method="post">
<center>
<table cellpadding="10" border="0">
<tr>
<td><h3><?php echo $row['ISDES'] ?></h3></td>
</tr>
<tr>
<td><textarea cols=40 rows=4 name="ISSOL" value=<?php echo $row['ISSOL'] ?> ><?php echo $row['ISSOL'] ?> </textarea></td>
</tr>
</table>

<table cellpadding="20" border="0">
<tr>
<td>
<select name="STATUS">
  <option value="0">new</option>
  <option value="1">processing</option>
  <option value="2">compleated</option>
</select>
</td>
<td>
<input type="hidden" name="button1" value=<?php echo $row["SNO"] ?>/>
</td>
<td>
<input type="submit" name="button_S" value="Done" class="b1"></td>

</tr>
</table>
</center>
</form>



<center>
<form action="UserDetails.php" method="post">
<table cellpadding="10" border="0">
<tr>
<td>
<input type="hidden" name="Details" value=<?php echo $row['USERNAME']?>/>
</td>

<td>
<input type="hidden" name="button2" value=<?php echo $value ?>/>
</td>

<td>
<input type="button" value="Back" onclick = "window.location.href='IssueDisplay.php'" class="b1">
</td>

<td>
<input type="submit" name="Details1" value="Details" class="b1">
</td>
</form>

</center>

<?php 

}?>

<a href=AdminLogout.php class="pos_fixed1">Logout</a>
<?php }

else
{
header("Refresh: 0; url=http://localhost/HelpDesk/Admin/AdminAuthentication.html");
} ?>

</body>

</html>

