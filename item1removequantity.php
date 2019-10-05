<?php
$mysqli=mysqli_connect("localhost","id9028083_root","root1998","id9028083_hostel");
if($mysqli->connect_error) 
{
  exit('Could not connect');
}
$sql1 = "update duplicate set quantity = quantity+1 where itemid=1";
$sql2 = "select quantity from duplicate where itemid = 1";

//USE THIS OR THE OTHER(MORE SECURE)
$result = $mysqli->query($sql1);
$result = $mysqli->query($sql2);
$row = $result->fetch_assoc();

$sql3 = "select quantity from item where itemid = 1";
$result3 = $mysqli->query($sql3);
$row3 = $result3->fetch_assoc();

if ($row['quantity']<=$row3['quantity'])
echo $row['quantity'];
else
{
	$sql1 = "update duplicate set quantity = quantity-1 where itemid=1";
	$result1 = $mysqli->query($sql1);
	echo $row3['quantity'];
} 	
?>