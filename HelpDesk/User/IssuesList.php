<html>
<head>
<style>

tr:hover {
          background-color: Green;
        }

h1 {
  font-size: 3em;
  text-align: center;
}

body {
    background-color: #b0c4de;
font-family: 'Cinzel Decorative', cursive;
  background: url(http://s.cdpn.io/3/blurry-blue.jpg);
  background-size: cover;
  color: white;
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


.b1 {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #4197ee) );
	background:-moz-linear-gradient( center top, #79bbff 5%, #4197ee 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#4197ee');
	background-color:#79bbff;
	-webkit-border-top-left-radius:20px;
	-moz-border-radius-topleft:20px;
	border-top-left-radius:20px;
	-webkit-border-top-right-radius:20px;
	-moz-border-radius-topright:20px;
	border-top-right-radius:20px;
	-webkit-border-bottom-right-radius:20px;
	-moz-border-radius-bottomright:20px;
	border-bottom-right-radius:20px;
	-webkit-border-bottom-left-radius:20px;
	-moz-border-radius-bottomleft:20px;
	border-bottom-left-radius:20px;
	text-indent:0px;
	border:2px solid #469df5;
	display:inline-block;
	color:#ffffff;
	font-family:Arial;
	font-size:26px;
	font-weight:bold;
	font-style:italic;
	height:38px;
	line-height:38px;
	width:101px;
	text-decoration:none;
	text-align:center;
}
.b1:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #4197ee), color-stop(1, #79bbff) );
	background:-moz-linear-gradient( center top, #4197ee 5%, #79bbff 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#4197ee', endColorstr='#79bbff');
	background-color:#4197ee;
}.b1:active {
	position:relative;
	top:1px;
}
</style>
</head>

<body>

<?php
session_start();
?>

<center><h1><I>ISSUES POSTED</I></h1></center>

<?php
if(isset($_SESSION['USERNAME']))
{
$i=1;
$con=mysqli_connect("localhost","root","root","db1");

$USERNAME=$_SESSION['USERNAME'];

$result= mysqli_query($con,"SELECT * FROM issuesdetails where USERNAME='$USERNAME'");

?>

<table border=0 cellpadding=20>
<tr>
<th style="font-size: 1.5em;
"><h3><I>SNO</I></h3></td>
<th style="font-size: 1.5em;
"><h3><I>Issue Type</I></h3></th>
<th style="font-size: 1.5em;
"><h3><I>Issue</I></h3></th>
<th style="font-size: 1.5em;
"><h3><I>Status</I></h3></th>
<th style="font-size: 1.5em;
"><h3><I>Date</I></h3></th>
<th style="font-size: 1.5em;
"><h3><I>OWNER</I><h3></th>
</tr>

<?php
while($row = mysqli_fetch_array($result)) {
?>
<form id="button<?php echo $i ?>" action="FullIsuue.php" method="post">
<tr>
  <td><h4><?php echo $i ?></h4></td>
  <td><h4><I><?php echo $row['ISTYPE'] ?></I></h4></td>
<td>
<a href="javascript: document.getElementById('button<?php echo $i ?>').submit()" title="<?php echo substr($row['ISDES'],0,25) ?>...."><?php echo substr($row['ISDES'],0,25) ?>....</a>
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

<center>
<form action="Issue.php">
<input type="submit" value="Issue" class="b1">
</form>

<a href=UserLogout.php class="pos_fixed1" class="b1">Logout</a>
<a href=EditProfile.php class="pos_fixed2">Edit Profile</a>
<?php }

else
{
header("Refresh: 0; url=http://localhost/HelpDesk/User/Login.html");
} ?>

</body>
</html>
