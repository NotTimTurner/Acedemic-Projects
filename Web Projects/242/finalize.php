<?php session_start()?>	
	<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
//Name: Tim Turner 
//		file: finalize.php
//		csc242-010-spring 2013
//		Dr.Frye
//		Due Date:5/4/2013
//		URL:http://unixweb.kutztown.edu/~tturn265/finalize.php
//		About:Displayes the orders the user has submited-->
<HTML>
<head>
	<title> finalized </title>
	<link rel="stylesheet" type="text/css" a href="style.css"/>	
	<script type="text/javascript">

	</script>
	<body>
		<div id="container" style="width:100%;height:100%;">
			<div id="header" style="Text-align:center;border-style:solid;border-color:black">
				<h1 style="margin-bottom:0;">Finalized</h1>
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
			
			$tax=$_SESSION["Tax"];
			$shipping=$_SESSION["shipping"];
			$subTotal=$_SESSION["total"];
			$Email=$_SESSION["Email"];
			$id;
			$orderID;
			date_default_timezone_set('America/New_York');
			$date=Date("Y/m/d h:i:s");
			$price;
			
			//gets the customer id
			 $query=" select CustomerID from Customers where Email ='$Email'";
			$result = mysql_query($query);
			$num = mysql_numrows($result);
			for($i = 0; $i < $num; $i++)
			{
				$id=(mysql_result($result,$i,"CustomerID"));
					
			}
			
			//creates the order ID
			$query="INSERT INTO Orders (CustomerID) VALUES ('$id')";
			$result = mysql_query($query) or die("Error accessing orders table: " .  mysql_error());
			
			//grabs the order id
			$query="SELECT OrderID FROM Orders WHERE CustomerID = '$id' AND OrderDate IS NULL";	
			$result = mysql_query($query);
			$numR = mysql_numrows($result);
			
			for($i = 0; $i < $numR; $i++)
			{
				$orderID=(mysql_result($result,$i,"OrderID"));
			}
			//inserts the data into the database
			$query="UPDATE Orders SET ShippingCost='$shipping', Tax='$tax', Total='$subTotal', OrderDate='$date'
				WHERE OrderID='$orderID' AND CustomerID='$id'";
			$result = mysql_query($query) or die("Error accessing Orders table: " .  mysql_error());
			for($i=0; $i < $_SESSION['numItems']; $i++)
				{
					$PID=$_SESSION['productID'][$i];
					$qty=$_SESSION['quantity'][$i];
					
					$query="select Price from Products where ProductID='$PID'";
					$result = mysql_query($query)or die("Error accessing Products table: " .  mysql_error());;
					$numT = mysql_numrows($result);
					
					for($x = 0; $x < $numT; $x++)
					{
						$price=(mysql_result($result,$x,"Price"));
					}
			
					$query="INSERT INTO OrderDetails (OrderID, ProductID, Quantity, LineTotal)
						VALUES ('$orderID', '$PID', '$qty', '$price')";
					$result = mysql_query($query)or die("Error accessing Customers table: " .  mysql_error());	
					Print("Thank you for your purchase.");
				}
			db_close();
			?>
			
			</div>
		</div>
	</body>
</html>