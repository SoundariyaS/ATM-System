<table border="3px">
<thead>
<tr>
<th>FROMUSERNAME</th>
<th>TOUSERNAME</th>
<th>MESSAGE</th>
</tr>
</thead>
<?php
include 'db.php';
$a=$_POST['fu'];
$b=mysqli_query($conn,"SELECT * FROM message where Fromusername='$a'");
if(mysqli_num_rows($b)!=0)
{
	while($c=mysqli_fetch_array($b))
	{
		$fu=$c['Fromusername'];
		$tu=$c['Tousername'];
		$b=$c['Message'];
		echo '<tbody><tr>
		<td>'.$fu.'</td>
		<td>'.$tu.'</td>
		<td>'.$b.'</td>
		</tbody></tr>';
	}
}
else
{
	echo "<script type='text/javascript'>alert('enter correct username!!!');</script>";
include 'display.php';
}
?>
</table>