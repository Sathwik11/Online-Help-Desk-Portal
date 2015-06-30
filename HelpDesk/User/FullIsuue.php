<html>
<head>
<link rel="stylesheet" types="text/css" href="S1.css">

<style>
.pos_fixed1
{
position:fixed;
top:30px;
right:30px;
}

.pos_fixed2
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
?>

<center><h1><I>ISSUE</I></h1></center>

<?php

if(isset($_SESSION['USERNAME']))
{
$con=mysqli_connect("localhost","root","root","db1");

$value=mysqli_real_escape_string($con,$_POST["button1"]);

$result= mysqli_query($con,"SELECT * FROM issuesdetails where sno='$value'");

if($row = mysqli_fetch_array($result)) {

?>
<h3><I>Issue Posted</I></h3>
........................<br>
<?php echo $row['ISDES'] ?><br>
<h3><I>Status</I></h3>
........................<br>

<?php if($row['STATUS']==0){ ?>
NOT Yet Processed</h4>
<?php } ?>

<?php if($row['STATUS']==1){ ?>
Under Processing
<?php } ?>

<?php if($row['STATUS']==2){ ?>
Compleated</h4>
<h3><I>Solution</I></h3>
.......................<br>
<?php echo $row['ISSOL'] ?>
<?php } ?>

<center>
<table border=0 cellpadding=10>
<tr>
<td>
<form action="IssuesList.php">
<input type="submit" value="Back" class="b1">
</form>
</td>
<td>
<form action="Issue.php">
<input type="submit" value="Issue" class="b1">
</form>
</td>
</tr>

</table>
</center>

<?php } ?>
<a href=UserLogout.php class="pos_fixed1">Logout</a>
<a href=EditProfile.php class="pos_fixed2">Edit Profile</a>
<?php }

else
{
header("Refresh: 0; url=http://localhost/HelpDesk/User/Login.html");
} ?>

</body>
</html>