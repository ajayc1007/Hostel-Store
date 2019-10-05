<?php
$mysqli=mysqli_connect("localhost","id9028083_root","root1998","id9028083_hostel");
if($mysqli->connect_error) 
{
  exit('Could not connect');
}
$sql2 = "select quantity from duplicate where itemid = 2";
$result = $mysqli->query($sql2);
$row = $result->fetch_assoc();
if ($row['quantity'] <= 1)
{
	$sql1 = "update duplicate set quantity = 0 where itemid=2";
	$result = $mysqli->query($sql1);
	exit("Out of stock !");
}
else
{
	$sql1 = "update duplicate set quantity = quantity-1 where itemid=2";
	$sql2 = "select quantity from duplicate where itemid = 2";
	//USE THIS OR THE OTHER(MORE SECURE)
	$result = $mysqli->query($sql1);
	$result = $mysqli->query($sql2);
	$row = $result->fetch_assoc();
	echo $row['quantity'];
}
/*
$stmt = $mysqli->prepare($sql);
//$stmt->bind_param("i", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($quantity);
$stmt->fetch();
$stmt->close();
echo "<h4> ".$quantity."</h4>";
*/
?>