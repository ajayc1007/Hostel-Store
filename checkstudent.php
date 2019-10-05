<?php
	session_start();
	$con=mysqli_connect("localhost","id9028083_root","root1998","id9028083_hostel");
	if ($con==false)
	{
		die("CONNECTION NOT ESTABLISHED !".mysqli_connect_error());
	}
	$username=$_POST['username'];
	$password=$_POST['password'];
	$correct=false;
	$result=$con->query("select * from student"); //don't try to use mysqli_query() [it doesn't work online !]
	$_SESSION['loggedin']=false;
	if (mysqli_num_rows($result)>0)
	{
		while ($row=mysqli_fetch_assoc($result))
		{
			if ($row['username']==$username and $row['password']==$password)
			{
				//$_SESSION['loggedin']=true;
				//$_SESSION['name']=$_POST['name'];
				$_SESSION['username']=$_POST['username'];
				//$_SESSION['regno']=$_POST['regno'];
				//header('location:cart.php');					
				$correct=true;
				break;	
			}
		}
		if ($correct==false)
		{
			echo "<script type='text/javascript'>alert('Invalid credentials. Try again !'); window.location.href='student.php';</script>";
		}
		if ($correct==true)
		{
			header('location:cart.php');					
		}
	}	
	else
	{
		echo "<script type='text/javascript'>alert('Try again !'); window.location.href='student.php';</script>";
	}
	mysqli_close($con);
?>