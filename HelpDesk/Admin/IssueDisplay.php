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

.pos_fixed
{
position:fixed;
top:30px;
right:5px;
}
</style>
</head>

<body>

<?php
session_start();
?>


<?php

if(isset($_SESSION['ADMINNAME']))
{
$con=mysqli_connect("localhost","root","root","db1");
$i=1;
$result = mysqli_query($con,"SELECT * FROM issuesdetails where status=0");

?>
<form id="button" action="IssueDisplayAll.php" method="post" class="demo">
<select name="ISTYPE1" class="pos_fixed" id="ISTYPE1" onchange="this.form.submit()">

  <option value=0 >NEW</option>
  <option value=1 >Under Process</option>
  <option value=2 >Compleated</option>


</select>
</form>


<center>
<h1><I>Issues Of Customers</I></h1>
<table border=0 cellpadding=20>
<tr>
<td><h3><I>SNO</I></h3></td>
<td><h3><I>Issue Type</I></h3></td>
<td><h3><I>Issue</I></h3></td>
<td><h3><I>Status</I></h3></td>
<td><h3><I>Date</I></h3></td>
<td><h3><I>Owner<I></h3></td>

</tr>

<?php
while($row = mysqli_fetch_array($result)) {
?>
<form id="button<?php echo $row['SNO'] ?>" action="IssueDescription.php" method="post">
<tr>
  <td><h4><?php echo $i ?></h4></td>
  <td><h4><I><?php echo $row['ISTYPE'] ?></I></h4></td>
<td>
<a href="javascript: document.getElementById('button<?php echo $row['SNO'] ?>').submit()" title="<?php echo substr($row['ISDES'],0,25) ?>...."><?php echo substr($row['ISDES'],0,25) ?>....</a>
</td>


<td>
<?php
if($row['STATUS']==0){ ?>
<h4>NOT Yet Processed</h4>
<?php } ?>
<?php if($row['STATUS']==1){ ?>
<h4>Under Processing</h4>
<?php } ?>
<?php 
if($row['STATUS']==2){ ?>
<h4>Compleated</h4>
<?php } ?>

</td>
<td>
<h4><?php echo $row['Date'] ?></h4>
</td>

</td>
<td>
<h4><?php echo $row['CONADMIN'] ?></h4>
</td>


<td>
<input type="hidden" name="button1" value="<?php echo $row['SNO'] ?>"/>
</td>


</tr>
</form>
<?php
  $i=$i+1;}
?>
</table>
</center>

<a href=AdminLogout.php class="pos_fixed1">Logout</a>
<?php }

else
{
header("Refresh: 0; url=http://localhost/HelpDesk/Admin/AdminAuthentication.html");
} ?>

</body>
</html>

