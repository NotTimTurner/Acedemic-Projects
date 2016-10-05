<?php session_start()?>	
	<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
//Name: Tim Turner 
//		file: orders.php
//		csc242-010-spring 2013
//		Dr.Frye
//		Due Date:5/4/2013
//		URL:http://unixweb.kutztown.edu/~tturn265/orders.php
//		About:Displayes the orders the user has submited-->
<HTML>
	<head>
		<title> Order Status </title>
		<link rel="stylesheet" type="text/css" a href="style.css"/>	
	</head>
	<body>
		<div id="container" style="width:100%;height:100%;">
			<div id="header" style="Text-align:center;border-style:solid;border-color:black">
				<h1 style="margin-bottom:0;">Order Status</h1>
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
			//check to see if user is logged in
			if($_SESSION["Email"]==null)
				{ 	
					print(" You must be logged in to do this click ");
					print('<a href = "Login.php">Here</a>');
					print(" to login");
				}
			else 
			{			
				require("dbconn.php");
				db_connect();
				$Email=$_SESSION["Email"];
				$id;
				$date;
				//looks up customer id
				$query=" select CustomerID from Customers where Email ='$Email'";
				$result = mysql_query($query);
				$num = mysql_numrows($result);
				for($i = 0; $i < $num; $i++)
				{
					$id=(mysql_result($result,$i,"CustomerID"));
				}
				//grabs order info for that customer
				$query= "SELECT OrderID, OrderDate, ShippingCost, Tax, Total FROM Orders WHERE CustomerID = '$id'";
				$results= mysql_query($query)or die("Error accessing orders table: " .  mysql_error());
				$num= mysql_numrows($results);
				print("click the order ID for more details<br/>");
				 echo("<hr>");
				 //prints out data
				for($i = 0; $i < $num; $i++)
				{
					Print("order ID:");
					print('<a href = "orderDetails.php?OrderID=');
					print(mysql_result($results, $i, "OrderID"));
					$OrderID = mysql_result($results, $i, "OrderID");
				
					print('">');
					print($OrderID);
					print('</a><br/> ');
					print("order Date: ");
					print(mysql_result($results, $i, "OrderDate"));
					Print("</br>");
					print("Shipping Cost: $");
					$shipping=mysql_result($results, $i, "ShippingCost");
					print(number_format($shipping,2));
					Print("</br>");
					print("Tax: $");
					$tax=mysql_result($results, $i, "Tax");
					print(number_format($tax,2));
					Print("</br>");
					print("Total: $");
					$total=mysql_result($results, $i, "Total");
					print(number_format($total,2));
					 echo("<hr>");	
				}
				db_close();
			}
			
			?>
		
			</div>
		</div>
	</body>
</html>