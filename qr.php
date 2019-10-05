<?php
	session_start();
	if (!isset($_SESSION['username']))
	{
		header('location:student.php');
	}
?>
<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<title>	Code </title>
		<link rel="icon" href="image/logo.png"/>	
	</head>
	<body>
		<div style="height:300px;width:350px;float:left;margin-left:500px;margin-top:100px;">
			<img style="margin-left:70px;" id="barcode" src="https://api.qrserver.com/v1/create-qr-code/?data=<?php echo uniqid();?> &amp;size=100x100"
			alt=""
			title="mitstores"
			width="200"
			height="200" />
			<h2 style="text-align:center;font-size:40px;">Scan and Enjoy !</h2>
		</div>
	</body>
</html>