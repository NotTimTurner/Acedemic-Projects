<?php session_start()?>	
	<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
//Name: Tim Turner 
//		file: addToCart.php
//		csc242-010-spring 2013
//		Dr.Frye
//		Due Date:5/4/2013
//		URL:http://unixweb.kutztown.edu/~tturn265/addToCart.php
//		About:adds the product into the shopping cart-->
<HTML>
<head>
	<title> Add to Cart </title>
	<link rel="stylesheet" type="text/css" a href="style.css"/>	
	<script type="text/javascript">

	</script>
	<body>
		<div id="container" style="width:100%;height:100%;">
			<div id="header" style="Text-align:center;border-style:solid;border-color:black">
				<h1 style="margin-bottom:0;">Add to Cart</h1>
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
				//check to see if you are logged in
				if($_SESSION["Email"]==null)
				{ 	
					print(" You must be logged in to do this click ");
					print('<a href = "Login.php">Here</a>');
					print(" to login");
				}
				//check to see if they entered a quantity
				elseif($_POST['qty']=="")
				{
					print("you must enter a quantity, click back to return to enter a quantity");
				}
				//check to see if they put in a 0 for quantity
				elseif($_POST['qty']==0)
				{
					print("you can not enter 0 for your quantity. Click back to enter a non zero quantity");
				}
				//if they pass the check it stores the item is session variables
				else
				{
					$numItem=$_SESSION['numItems'];
					$_SESSION['productID'][$numItem]= $_GET["pID"];
					$_SESSION['quantity'][$numItem]=$_POST['qty'];
					$_SESSION['numItems']++;
					$numItem=$_SESSION['numItems'];
					print(" Thank you, your item has been added to your cart");
				}					
			?>
			</div>
		</div>
	</body>
</html>	

	