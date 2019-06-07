<html>
<head>
</head>


<?php
if(isset($_POST['login']))
{
session_start();
include "db.php";

$a=trim($_POST["uid"]);
$b=trim($_POST["pid"]);
$c=trim($_POST["aid"]);
$x="select * from login where Username='$a' and Accountnumber='$c' and BINARY Pin='$b'";
$y=$conn->query($x);
if($y->num_rows==1)
{
	$row = $y->fetch_assoc();
	$_SESSION["uid"] = $row["Username"];
	$_SESSION["pwd"]=$row["Pin"];
	$_SESSION["aid"]=$row["Accountnumber"];	
	echo "<script type='text/javascript'>window.location.href='str.php';</script>";
	
	exit();
}
else
{
	echo "<script type='text/javascript'>alert('Wrong Username or Accountnumber or Password!!!');</script>";
	//echo "Enter vaild Details";
	include "log.php";
	
}
$conn->close();
}
else
	echo "<script type='text/javascript'>window.top.location.href='unauthorised.php';</script>";
?> 
<body>

</body>
</html>