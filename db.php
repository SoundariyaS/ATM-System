<?php
$servername="localhost";
$username="root";
$password="";
$db="ammu";
$conn=new mysqli($servername,$username,$password,$db);
if($conn->connect_error)
{
	echo "<script type='text/javascript'>alert('connection error!!!!');</script> ";
}
?>