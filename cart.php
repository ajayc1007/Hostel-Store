<?php
	session_start();
	if (!isset($_SESSION['username']))
	{
		header('location:student.php');
	}
	$con=mysqli_connect("localhost","id9028083_root","root1998","id9028083_hostel");
	if ($con==false)
	{
		die("CONNECTION NOT ESTABLISHED !".mysqli_connect_error());
	}
	$result=$con->query("select quantity from duplicate"); 
	//note: check which table to use (item or duplicate again !!! and also check whether quantity is required in item)
	//don't try to use mysqli_query() [it doesn't work online !]
	if (mysqli_num_rows($result)>0)
	{
		$quantity=array();
		$original=array();
		$initial_zero=0;
		$i=0;
		while($row = $result->fetch_assoc())
		{
			$quantity[$i]=$row['quantity'];
			$original[$i]=0;
			$i=$i+1;
		}
	}
	mysqli_close($con);
?>

<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link rel="stylesheet" type="text/css" href="css/cart.css" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<title>	Cart </title>
		<link rel="icon" href="image/logo.png"/>	
	</head>
	<body>
		<div class="big1">
			<div class="big2">
				<div class="heading">
					<div style="float:left;height:60px;width:500px;">
						<h1 style="font-size:40px;">Grab your product !</h1>
					</div>
					<div style="float:right;height:60px;width:100px;">
						<input type="button" style="margin-top:25px;height:50px;width:125px;font-size:22px;" class="buttons" value="Log out" onclick="location.href='logout.php'">
					</div>
				</div>
				<div class="box1">
					<div class="item1">
						<div class="itembox" >
							<img src="image/puff.jpg" alt="Puffs" style="height:120px;width:150px;">
							<input type="button" class="buttons" value="ADD" onclick="item1decrementquantity();item1added();total1();" />
							<input type="button" class="buttons" value="REMOVE" onclick="item1incrementquantity();item1remove();total1();" />
						</div>
						<div class="vegdetails">
							<h2 style="margin:auto;padding-left:2px;">&nbspPuffs</h2>
							<h4 style="margin:auto;padding-top:7px;"> &nbsp&nbspPrice ₹10</h4>
							<h4 style="margin:auto;padding-top:10px;"> &nbsp&nbspIn stock ></h4>
							<?php echo '<h3 id="puffs" style="margin:auto;padding-top:5px;text-align:center;color:yellow;">'.$quantity[0].'</h3>'; ?>
						</div>
					</div>
					<div class="item2">
						<div class="itembox">
							<img src="image/eggpuff.jpg" alt="EggPuffs" style="height:120px;width:150px;">
							<input type="button" class="buttons" value="ADD" onclick="item2decrementquantity();item2added();total2();" />
							<input type="button" class="buttons" value="REMOVE" onclick="item2incrementquantity();item2remove();total2();" />
						</div>
						<div class="nonvegdetails">
							<h2 style="margin:auto;padding-left:2px;">&nbspEggPuffs</h2>
							<h4 style="margin:auto;padding-top:7px;"> &nbsp&nbspPrice ₹12</h4>
							<h4 style="margin:auto;padding-top:10px;"> &nbsp&nbspIn stock ></h4>
							<?php echo '<h3 id="eggpuffs" style="margin:auto;padding-top:5px;text-align:center;color:yellow;">'.$quantity[1].'</h3>'; ?>
						</div>
					</div>
					<div class="item3">
						<div class="itembox" style="background-color:white;">
							<img src="image/cadbury.jpg" alt="Cadbury" style="height:120px;width:110px;margin-left:20px;">
							<input type="button" class="buttons" value="ADD" onclick="item3decrementquantity();item3added();total3();" />
							<input type="button" class="buttons" value="REMOVE" onclick="item3incrementquantity();item3remove();total3();" />
						</div>
						<div class="vegdetails">
							<h2 style="margin:auto;padding-left:2px;">&nbspCadbury</h2>
							<h4 style="margin:auto;padding-top:7px;"> &nbsp&nbspPrice ₹5</h4>
							<h4 style="margin:auto;padding-top:10px;"> &nbsp&nbspIn stock ></h4>
							<?php echo '<h3 id="cadbury" style="margin:auto;padding-top:5px;text-align:center;color:yellow;">'.$quantity[2].'</h3>'; ?>
						</div>
					</div>
				</div>
				<div class="box2">
					<div class="item1">
						<div class="itembox" style="background-color:white;">
							<img src="image/coffee.jpg" alt="Coffee" style="height:120px;width:120px;margin-left:20px;">
							<input type="button" class="buttons" value="ADD" onclick="item4decrementquantity();item4added();total4();" />
							<input type="button" class="buttons" value="REMOVE" onclick="item4incrementquantity();item4remove();total4();" />
						</div>
						<div class="vegdetails">
							<h2 style="margin:auto;padding-left:2px;">&nbspCoffee</h2>
							<h4 style="margin:auto;padding-top:7px;"> &nbsp&nbspPrice ₹10</h4>
							<h4 style="margin:auto;padding-top:10px;"> &nbsp&nbspIn stock ></h4>
							<?php echo '<h3 id="coffee" style="margin:auto;padding-top:5px;text-align:center;color:yellow;">'.$quantity[3].'</h3>'; ?>
						</div>
					</div>
					<div class="item2">
						<div class="itembox" style="background-color:white;">
							<img src="image/hideandseek.jpg" alt="HideAndSeek" style="height:100px;width:150px;margin-top:10px;margin-bottom:10px;">
							<input type="button" class="buttons" value="ADD" onclick="item5decrementquantity();item5added();total5();" />
							<input type="button" class="buttons" value="REMOVE" onclick="item5incrementquantity();item5remove();total5();" />
						</div>
						<div class="vegdetails">
							<h2 style="margin:auto;padding-top:3px;padding-left:2px;font-size:22px;">Hide&Seek</h2>
							<h4 style="margin:auto;padding-top:7px;"> &nbsp&nbspPrice ₹10</h4>
							<h4 style="margin:auto;padding-top:10px;"> &nbsp&nbspIn stock ></h4>
							<?php echo '<h3 id="hideandseek" style="margin:auto;padding-top:5px;text-align:center;color:yellow;">'.$quantity[4].'</h3>'; ?>
						</div>
					</div>
					<div class="item3">
						<div class="itembox" style="background-color:white;">
							<img src="image/icecream.jpg" alt="IceCream" style="height:120px;width:80px;margin-left:35px;">
							<input type="button" class="buttons" value="ADD" onclick="item6decrementquantity();item6added();total6();" />
							<input type="button" class="buttons" value="REMOVE" onclick="item6incrementquantity();item6remove();total6();" />
						</div>
						<div class="vegdetails">
							<h2 style="margin:auto;padding-left:2px;">&nbspIceCream</h2>
							<h4 style="margin:auto;padding-top:7px;"> &nbsp&nbspPrice ₹15</h4>
							<h4 style="margin:auto;padding-top:10px;"> &nbsp&nbspIn stock ></h4>
							<?php echo '<h3 id="icecream" style="margin:auto;padding-top:5px;text-align:center;color:yellow;">'.$quantity[5].'</h3>'; ?>
						</div>
					</div>
				</div>
				<div class="box3">					
					<div class="item1">
						<div class="itembox" style="background-color:white;">
							<img src="image/krackjack.jpg" alt="KrackJack" style="height:110px;width:150px;margin-top:5px;margin-bottom:5px;">
							<input type="button" class="buttons" value="ADD" onclick="item7decrementquantity();item7added();total7();" />
							<input type="button" class="buttons" value="REMOVE" onclick="item7incrementquantity();item7remove();total7();" />
						</div>
						<div class="vegdetails">
							<h2 style="margin:auto;padding-left:2px;">KrackJack</h2>
							<h4 style="margin:auto;padding-top:7px;"> &nbsp&nbspPrice ₹10</h4>
							<h4 style="margin:auto;padding-top:10px;"> &nbsp&nbspIn stock ></h4>
							<?php echo '<h3 id="krackjack" style="margin:auto;padding-top:5px;text-align:center;color:yellow;">'.$quantity[6].'</h3>'; ?>
						</div>
					</div>
					<div class="item2">
						<div class="itembox" style="background-color:white;">
							<img src="image/colgate.jpg" alt="Colgate" style="height:90px;width:150px;margin-top:15px;margin-bottom:15px;">
							<input type="button" class="buttons" value="ADD" onclick="item8decrementquantity();item8added();total8();" />
							<input type="button" class="buttons" value="REMOVE" onclick="item8incrementquantity();item8remove();total8();" />
						</div>
						<div class="vegdetails">
							<h2 style="margin:auto;padding-left:2px;">&nbspColgate</h2>
							<h4 style="margin:auto;padding-top:7px;"> &nbsp&nbspPrice ₹20</h4>
							<h4 style="margin:auto;padding-top:10px;"> &nbsp&nbspIn stock ></h4>
							<?php echo '<h3 id="colgate" style="margin:auto;padding-top:5px;text-align:center;color:yellow;">'.$quantity[7].'</h3>'; ?>
						</div>
					</div>
					<div class="item3">
						<div class="itembox">
							<img src="image/rin.jpg" alt="Rin-Soap" style="height:120px;width:150px;">
							<input type="button" class="buttons" value="ADD" onclick="item9decrementquantity();item9added();total9();" />
							<input type="button" class="buttons" value="REMOVE" onclick="item9incrementquantity();item9remove();total9();" />
						</div>
						<div class="vegdetails">
							<h2 style="margin:auto;padding-left:2px;">&nbspRin-Soap</h2>
							<h4 style="margin:auto;padding-top:7px;"> &nbsp&nbspPrice ₹10</h4>
							<h4 style="margin:auto;padding-top:10px;"> &nbsp&nbspIn stock ></h4>
							<?php echo '<h3 id="rin" style="margin:auto;padding-top:5px;text-align:center;color:yellow;">'.$quantity[8].'</h3>'; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="big3">
				<h1 style="font-size:40px;text-align:center;color:black;">Cart</h1>
				<hr style="height:0px;border-color:black;border-width:1px;"></hr>
				<div class="billitem">				
					<div class="item_in_bill">
						<pre style="margin-top:6px;color:black;font-size:30px;">      Puffs  x</pre>
					</div>
					<div class="quantity">
						<?php echo '<h3 id="puffsadded" style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:white;">'.$initial_zero.'</h3>'; ?>
					</div>
					<div class="equal">
						<h3 style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:black;">=</h3>'
					</div>
					<div class="price">
						<?php echo '<h3 id="total1" style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:white;">0</h3>'; ?>
					</div>
				</div>
				<div class="billitem">
					<div class="item_in_bill">
						<pre style="margin-top:6px;color:black;font-size:30px;"> EggPuffs x</pre>
					</div>
					<div class="quantity">
						<?php echo '<h3 id="eggpuffsadded" style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:white;">'.$initial_zero.'</h3>'; ?>
					</div>
					<div class="equal">
						<h3 style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:black;">=</h3>'
					</div>
					<div class="price">
						<?php echo '<h3 id="total2" style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:white;">0</h3>'; ?>
					</div>
				</div>
				<div class="billitem">
					<div class="item_in_bill">
						<pre style="margin-top:6px;color:black;font-size:30px;"> Cadbury  x</pre>
					</div>
					<div class="quantity">
						<?php echo '<h3 id="cadburyadded" style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:white;">'.$initial_zero.'</h3>'; ?>
					</div>
					<div class="equal">
						<h3 style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:black;">=</h3>'
					</div>
					<div class="price">
						<?php echo '<h3 id="total3" style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:white;">0</h3>'; ?>
					</div>
				</div>
				<div class="billitem">
					<div class="item_in_bill">
						<pre style="margin-top:6px;color:black;font-size:30px;">    Coffee  x</pre>
					</div>
					<div class="quantity">
						<?php echo '<h3 id="coffeeadded" style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:white;">'.$initial_zero.'</h3>'; ?>
					</div>
					<div class="equal">
						<h3 style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:black;">=</h3>'
					</div>
					<div class="price">
						<?php echo '<h3 id="total4" style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:white;">0</h3>'; ?>
					</div>
				</div>
				<div class="billitem">
					<div class="item_in_bill">
						<pre style="margin-top:6px;color:black;font-size:27px;">Hide&ampSeek x</pre> 	
					</div>
					<div class="quantity">
						<?php echo '<h3 id="hideandseekadded" style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:white;">'.$initial_zero.'</h3>'; ?>
					</div>
					<div class="equal">
						<h3 style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:black;">=</h3>'
					</div>
					<div class="price">
						<?php echo '<h3 id="total5" style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:white;">0</h3>'; ?>
					</div>
				</div>
				<div class="billitem">
					<div class="item_in_bill">
						<pre style="margin-top:6px;color:black;font-size:30px;">IceCream x</pre>
					</div>
					<div class="quantity">
						<?php echo '<h3 id="icecreamadded" style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:white;">'.$initial_zero.'</h3>'; ?>
					</div>
					<div class="equal">
						<h3 style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:black;">=</h3>'
					</div>
					<div class="price">
						<?php echo '<h3 id="total6" style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:white;">0</h3>'; ?>
					</div>
				</div>
				<div class="billitem">
					<div class="item_in_bill">
						<pre style="margin-top:6px;color:black;font-size:29px;">KrackJack x</pre>
					</div>
					<div class="quantity">
						<?php echo '<h3 id="krackjackadded" style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:white;">'.$initial_zero.'</h3>'; ?>
					</div>
					<div class="equal">
						<h3 style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:black;">=</h3>'
					</div>
					<div class="price">
						<?php echo '<h3 id="total7" style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:white;">0</h3>'; ?>
					</div>
				</div>
				<div class="billitem">
					<div class="item_in_bill">
						<pre style="margin-top:6px;color:black;font-size:30px;">  Colgate  x</pre>
					</div>
					<div class="quantity">
						<?php echo '<h3 id="colgateadded" style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:white;">'.$initial_zero.'</h3>'; ?>
					</div>
					<div class="equal">
						<h3 style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:black;">=</h3>'
					</div>
					<div class="price">
						<?php echo '<h3 id="total8" style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:white;">0</h3>'; ?>
					</div>
				</div>
				<div class="billitem">
					<div class="item_in_bill">
						<pre style="margin-top:6px;color:black;font-size:29px;"> Rin-Soap x</pre>
					</div>
					<div class="quantity">
						<?php echo '<h3 id="rinadded" style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:white;">'.$initial_zero.'</h3>'; ?>
					</div>
					<div class="equal">
						<h3 style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:black;">=</h3>'
					</div>
					<div class="price">
						<?php echo '<h3 id="total9" style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:white;">0</h3>'; ?>
					</div>
				</div>
				<div class="totalprice">
					<div class="item_in_bill" style="background-color:blue;">
						<pre style="margin-top:6px;color:black;font-size:30px;color:white;">         Total </pre>
					</div>
					<div class="quantity" style="background-color:blue;">
					</div>
					<div class="equal" style="background-color:blue;">
						<h3 style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:white;">=</h3>'
					</div>
					<div class="price" style="background-color:blue;">
						<?php echo '<h3 id="finaltotal" style="font-size:30px;margin:auto;padding-top:8px;text-align:center;color:white;">0</h3>'; ?>
					</div>
				</div>
					<div style="float:left;height:40px;width:300px;background-color:black;">
						<input type="button" style="height:40px;width:300px;font-size:30px;" class="buttons" value="Checkout" onclick="location.href='qr.php'">
					</div>
				</div>
			</div>			
		</div>
	</body>
	<script type="text/javascript">
	
	    
window.onload = () => {
    let el = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
    el.parentNode.removeChild(el);
}
		//ITEM1 = PUFFS
		function item1incrementquantity()
		{
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			document.getElementById("puffs").innerHTML =this.responseText;
			}
			};
			xhttp.open("GET", "item1removequantity.php", true);
			xhttp.send();
		}
		function item1decrementquantity()
		{
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			document.getElementById("puffs").innerHTML =this.responseText;
			}
			};
			xhttp.open("GET", "item1addquantity.php", true);
			xhttp.send();
		}
		function item1added()
		{
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			document.getElementById("puffsadded").innerHTML =this.responseText;
			}
			};
			xhttp.open("GET", "item1addquantity_left.php", true);
			xhttp.send();
		}
		function item1remove()
		{
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			document.getElementById("puffsadded").innerHTML =this.responseText;
			}
			};
			xhttp.open("GET", "item1removequantity_left.php", true);
			xhttp.send();
		}
		function total1()
		{
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			document.getElementById("total1").innerHTML =this.responseText;
			}
			};
			xhttp.open("GET", "gettotal1.php", true);
			xhttp.send();
		}
		
		
		
		//ITEM2 = EGGPUFFS
		function item2incrementquantity()
		{
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			document.getElementById("eggpuffs").innerHTML =this.responseText;
			}
			};
			xhttp.open("GET", "item2removequantity.php", true);
			xhttp.send();
		}
		function item2decrementquantity()
		{
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			document.getElementById("eggpuffs").innerHTML =this.responseText;
			}
			};
			xhttp.open("GET", "item2addquantity.php", true);
			xhttp.send();
		}
		function item2added()
		{
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			document.getElementById("eggpuffsadded").innerHTML =this.responseText;
			}
			};
			xhttp.open("GET", "item2addquantity_left.php", true);
			xhttp.send();
		}
		function item2remove()
		{
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			document.getElementById("eggpuffsadded").innerHTML =this.responseText;
			}
			};
			xhttp.open("GET", "item2removequantity_left.php", true);
			xhttp.send();
		}
		function total2()
		{
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			document.getElementById("total2").innerHTML =this.responseText;
			}
			};
			xhttp.open("GET", "gettotal2.php", true);
			xhttp.send();
		}
		
	</script>
<html>