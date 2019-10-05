<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<title>	MIT </title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/main.css" >
		<link rel="icon" href="image/logo.png" >	
	</head>
	<body>
		<div class="box1">
			<input type="button" class="buttons" name="admin" value="Admin" onclick="admin()">
			<input type="button" class="buttons" name="student" value="Student" onclick="student()">
			<h1 style="font-size:90px"><br><br>MIT</h1>
		</div>
	</body>
	<script>
	    window.onload = () => 
	    {
            let el = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
            el.parentNode.removeChild(el);
        }
		function admin()
		{
			window.location.href="admin.php";
		}
		function student()
		{
			window.location.href="student.php";
		}
	</script>
</html>	