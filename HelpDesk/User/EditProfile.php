<?php
session_start();
?>

<center><h1>Edit Profile</h1></center>

<?php
if(isset($_SESSION['USERNAME']))
{
$con=mysqli_connect("localhost","root","root","db1");

$USNMAE=$_SESSION['USERNAME'];

$result = mysqli_query($con,"SELECT * FROM USERLOGIN where USERNAME='$USNAME'");

?>
<center>
<table cellpadding=10 border=0>

<tr>
<td><h2>Chage Email id </h2></td>
<td><h2>:</h2></td>
<td><h2></h2></td>
</tr>

<tr>
<td><h2>Cange Password</h2></td>
<td><h2>:</h2></td>
<td><h2></h2></td>
</tr>

<tr>
<td><h2>Retype Password</h2></td>
<td><h2>:</h2></td>
<td><h2></h2></td>
</tr>


<tr>
<td><h2>Change IP Address</h2></td>
<td><h2>:</h2></td>
<td><h2></h2></td>
</tr>


<tr>
<td><h2>Change MAC Address</h2></td>
<td><h2>:</h2></td>
<td><h2></h2></td>
</tr>

<tr>
<td><h2>Change Phone Number</h2></td>
<td><h2>:</h2></td>
<td><h2></h2></td>
</tr>



</table>
