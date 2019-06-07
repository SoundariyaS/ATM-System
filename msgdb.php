<?php
if(isset($_POST['submit']))
{
	include 'db.php';
	$a=$_POST['fu'];
	$b=$_POST['tu'];
	$c=$_POST['m'];
	
	
if(empty($a&&$b&&$c))
{
	echo "<script type='text/javascript'> alert ('fill all the details');</script>";
	include 'msg.php';
}
else
{
	mysqli_query($conn,"INSERT into message VALUES('$a','$b','$c') ");
	echo "<script type='text/javascript'> alert ('message sent');</script>";
	include 'display.php';
}
}
