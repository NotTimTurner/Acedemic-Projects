<?php session_start()?>	
	<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
//Name: Tim Turner 
//		file: orderDetails.php
//	csc242-010-spring 2013
//		Dr.Frye
//		Due Date:5/3/2013
//		URL:http://unixweb.kutztown.edu/~tturn265/orderDetails.php
//		About:Displayes the orders the user has submited-->
<HTML>
	<head>
		<title> Order Details  </title>
		<link rel="stylesheet" type="text/css" a href="style.css"/>	
	</head>
	<body>
		<div id="container" style="width:100%;height:100%;">
			<div id="header" style="Text-align:center;border-style:solid;border-color:black">
				<h1 style="margin-bottom:0;">Order Details</h1>
			</div>

			<div id="menu" style="height:50%;width:15%;float:left;">
				<div style= "border-style:solid;border-color:black"> <a href="NewAccount.html">  Create Account </a></div>
				<div style= "border-style:solid;border-color:black">   <a href="Login.php">  Login</a> </div>
				<div style= "border-style:solid;border-color:black"><a href="products.php">  Browse Catalog</a> </div>
				<div style= "border-style:solid;border-color:black"><a href="Search.php"> Search Catalog</a></div>  
				<div style= "border-style:solid;border-color:black"><a href="Checkout.php"> Checkout</a></div>
				<div style= "border-style:solid;border-color:black"><a href="orders.php"> Check Order Status</a></div>
				<div style= "border-style:solid;border-color:black"><a href="Project.html">   Contact us </a></div>
				<div style= "border-style:solid;border-color:black"><a href="Logout.php">Logout</a></div>
			</div>

			<div id="content" style="height:50%;width:75%;float:left;">
			<?php
			require("dbconn.php");
			db_connect();
			$id=$_GET['OrderID'];
			$Total;
			$pID;
			
			$query= "SELECT * FROM OrderDetails WHERE OrderID ='$id'";
			//print($query);
					
			$results= mysql_query($query)or die("Error accessing orders table: " .  mysql_error());
			$num= mysql_numrows($results);
			Print("order ID:");
			print($id);
			echo("<hr>");
			for($i = 0; $i < $num; $i++)
			{
				
				print("Product ID ");
				print(mysql_result($results, $i, "ProductID"));
				Print("</br>");
				print("Quantity: ");
				print(mysql_result($results, $i, "Quantity"));
				Print("</br>");
				print("Price: $");
				$Total=mysql_result($results, $i, "LineTotal");
				print(number_format($Total,2));
				Print("</br>");
				 echo("<hr>");	
			}
	
			db_close();
			
			?>
			</div>
		</div>
	</body>
</html>
