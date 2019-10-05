<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link rel="stylesheet" type="text/css" href="css/signup.css" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<title>	Sign Up </title>
		<link rel="icon" href="image/logo.png"/>	
	</head>
	<body>
		<div style="background-color:#ffe150;box-shadow:5px 5px 10px black;border-radius:20px;">
			<pre style="font-size:35px;color:black;text-align:left;font-weight:700;text-align:center;"> Create an account </pre>
			<form class="box1" name="signupform" method="POST" action="createuser.php">
				<input onfocus="fun1()" onblur="funname()" size="40" class="textfield" type="text" name="name" id="name" placeholder=" Name" required autocomplete="off" /><br><br>
				<input onfocus="fun1()" onblur="funregno()" size="40" class="textfield" type="text" name="regno" id="regno" placeholder=" Register Number" required autocomplete="off" /><br><br>
				<input onfocus="fun1()" onblur="funemail()" size="40" class="textfield" type="text" name="email" id="email" placeholder=" Email" required autocomplete="off" /><br><br>
				<input onfocus="fun1()" onblur="funusername()" size="40" class="textfield" type="text" name="username" id="username" placeholder=" Username" required autocomplete="off" /><br><br>
				<input onfocus="fun1()" onblur="funpassword()" size="40" class="textfield" type="password" name="password" id="password" placeholder=" Password" required autocomplete="off" /><br><br>
				<h2 style="color:black;text-align:center;font-size:18px;">HOSTEL TYPE
					<input style="position:relative;margin-left:25px;" required type="radio" name="hosteltype" value="g">General
					<input style="position:relative;margin-left:25px;" required type="radio" name="hosteltype" value="n">NRI	
				</h2>
				<br><input class="buttons" style="float:left;margin-left:150px;padding-left:10px;padding-right:10px;"   type="submit" value="SIGN UP">
				<input class="buttons" style="float:right;margin-right:150px;padding-left:10px;padding-right:10px;" type="reset" value="RESET">
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
			document.getElementById(document.activeElement.id).style.background ="#e1f6f7";
		}
		function funname()
		{
			document.getElementById("name").style.background ="white";
		}
		function funregno()
		{
			document.getElementById("regno").style.background ="white";
		}
		function funemail()
		{
			document.getElementById("email").style.background ="white";
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
</html>