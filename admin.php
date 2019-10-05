<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link rel="stylesheet" type="text/css" href="css/student.css" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300" type="text/css" />-->
		<title>	Admin </title>
		<link rel="icon" href="image/logo.png"/>	
	</head>
	<body>
		<div class="box1">
			<h1 style="font-size:70px;">You're &nbspwelcome</h1>
		</div>
		<div class="box2" style="height:270px;background-color:#ffe150;box-shadow:5px 5px 10px black;border-radius:20px;">
			<form style="text-align:center; margin-top:70px;"name="egform" method="POST" action="checkadmin.php">
				<h2>Username &nbsp<input onfocus="fun1()" onblur="funusername()" size="30" class="textfield" type="text" name="username" id="username" placeholder=" Username" required autocomplete="off" /></h2>
				<h2>Password &nbsp&nbsp<input onfocus="fun1()" onblur="funpassword()" size="30" class="textfield" type="password" name="password" id="password" placeholder=" Password" required autocomplete="off" /></h2>
				<input class="buttons" style="float:left;margin-left:220px;padding-left:10px;padding-right:10px;"   type="submit" value="LOGIN">
				<input class="buttons" style="float:right;margin-right:130px;padding-left:10px;padding-right:10px;" type="reset" value="RESET">				
			</form>
		</div>
	</body>
	<script>
	    
window.onload = () => {
    let el = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
    el.parentNode.removeChild(el);
}
		function fun1()
		{
			document.getElementById(document.activeElement.id).style.background="#e1f6f7";
		}
		function funusername()
		{
			document.getElementById("username").style.background ="white";
		}
		function funpassword()
		{
			document.getElementById("password").style.background ="white";
		}
	</script>
	</script>
</html>