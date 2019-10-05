<?php
	$con=mysqli_connect("localhost","id9028083_root","root1998","id9028083_hostel");
	if ($con==false)
	{
		die("CONNECTION NOT ESTABLISHED !".mysqli_connect_error());
	}
	$name=$_POST['name'];
	$regno=$_POST['regno'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$hosteltype=$_POST['hosteltype'];
	$result1=$con->query("insert into student values ('$regno','$name','$email','$username','$password','$hosteltype',0);");
	$result2=$con->query("select hosteltype from student where regno=".$regno.";");
	$row=mysqli_fetch_assoc($result2);
	
	if ($row['hosteltype']==='g')
	{
		$result3=$con->query("update student set amount = 50 where regno=".$regno.";");
	}
	else
	{
		$result3=$con->query("update student set amount = 100 where regno=".$regno.";");
	}	
	if ($result1&&$result2&&$result3)
	{		
		echo "<script>alert('Account created ! Log in now.'); window.location.href='student.php';</script>";
	}
	else
	{
		echo "<script type='text/javascript'>alert('Try again !'); window.location.href='signup.php';</script>";
	}
	mysqli_close($con);
?>
	