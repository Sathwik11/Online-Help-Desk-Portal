<html>
<head>
<link rel="stylesheet" types="text/css" href="S1.css">

<script>
function checkPhno()
{
var Phno = document.getElementById('PHNO').value;
var phoneno = /^\d{10}$/;
if((Phno.match(phoneno))  
        {  
      return true;  
        }  
      else  
        {  
        alert("Invalid Phone Number");  
        return false;  
        }  
}
</script>

<style>
.border1
{
border-style:none;
}

.border2
{
border:1px solid;
}

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

<center><h1>User Console</h1></center>

<?php
if(isset($_SESSION['USERNAME']))
{
$con=mysqli_connect("localhost","root","root","db1");

$USNMAE=$_SESSION['USERNAME'];

$result = mysqli_query($con,"SELECT * FROM issuestypes");
?>

<center>

<form action="StoreDetails.php" method="post" onSubmit="return checkPhno()">

<table border=0>

<tr>
<td><h3>Issue Type</h3></td>
<td><pre>  :  </pre></td>
<td>
<select name="ISTYPE1">
<?php
while($row = mysqli_fetch_array($result)) {
?>

  <option value=<?php echo $row['ISSTYPE'] ?> 
><?php echo $row['ISSTYPE'] ?></option>
<?php } ?>
</select>
</td>
</tr>

<tr>
<td><h3>Issue Description</h3></td>
<td><pre>  :  </pre></td>
<td><textarea cols=40 rows=4 name="ISDES" pattern="[0-9A-F]{20,}" title="Minmimum 20 letters or numbers" required></textarea></td>
</tr>

</table>

</center>
<center>
<input type="submit" class="b1">
</form><br><br>

<form action="IssuesList.php">
<input type="submit" value="IssueList" class="b1">
</form>

</center>

<a href=UserLogout.php class="pos_fixed1">Logout</a>
<a href=EditProfile.php class="pos_fixed2">Edit Profile</a>
<?php }

else
{
header("Refresh: 0; url=http://localhost/HelpDesk/User/Login.html");
} ?>
</body>
</html>




