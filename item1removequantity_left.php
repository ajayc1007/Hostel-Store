<?php
$mysqli=mysqli_connect("localhost","id9028083_root","root1998","id9028083_hostel");
if($mysqli->connect_error) 
{
  exit('Could not connect');
}

//$sql1 = "update duplicate set quantity = quantity+1 where itemid=1";
//$result1 = $mysqli->query($sql1);
$sql1 = "select quantity from item where itemid = 1";
$sql2 = "select quantity from duplicate where itemid = 1";

$result1 = $mysqli->query($sql1);
$result2 = $mysqli->query($sql2);
$row1 = $result1->fetch_assoc();
$row2 = $result2->fetch_assoc();

$diff=$row1['quantity']-$row2['quantity'];
if ($diff >= 0)
echo ($row1['quantity']-$row2['quantity']);
else
{
	echo "0";
	$sql1 = "update duplicate set quantity = quantity-1 where itemid=1";
	$result1 = $mysqli->query($sql1);
}
?>