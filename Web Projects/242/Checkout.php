<?php session_start()?>	
	<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
//Name: Tim Turner 
//		file: Checkout.php
//		csc242-010-spring 2013
//		Dr.Frye
//		Due Date:5/4/2013
//		URL:http://unixweb.kutztown.edu/~tturn265/Checkout.php.php
//		About:Displays the shopping cart and takes the user to finalize if they are finished-->
<HTML>
<head>
	<title> Checkout </title>
	<link rel="stylesheet" type="text/css" a href="style.css"/>	
	<body>
		<div id="container" style="width:100%;height:100%;">
			<div id="header" style="Text-align:center;border-style:solid;border-color:black">
				<h1 style="margin-bottom:0;">Shopping Cart</h1>
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
				//check to see if logged in if no take them to the login page
				if($_SESSION["Name"]==null)
				{ 	
					print(" You must be logged in to view this page click ");
					print('<a href = "Login.php">Here</a>');
					print(" to login");
				}
				
				else
				{
					$totalItem=0;
					$subTotal=0.0;
					$shipping=0.0;
					$shipping=number_format($shipping,2);
					$subTotal=number_format($subTotal,2);
					$tax=.06;
		
					//for every item you have in the cart looks it up in the database
					for($i=0; $i < $_SESSION['numItems']; $i++)
					{
						$ID=$_SESSION['productID'][$i];
						$qty=$_SESSION['quantity'][$i];
						$totalItem+=$qty;
				
						$query="SELECT * FROM Products WHERE ProductID = '$ID'";
						$result = mysql_query($query) or
						die("Error accessing Products table: " .  mysql_error());
						$num = mysql_numrows($result);
						if($num==0)
						{
							"Sorry this catigory has no products";
						}
						//prints info about the product
						for ($x = 0; $x < $num; $x++)
						{
							$prodID=mysql_result($result, $x, "ProductID");
							$title = mysql_result($result, $x, "Title");
							$name1 = mysql_result($result, $x, "Name1");
							$name2 = mysql_result($result, $x, "Name2");
							$name3 = mysql_result($result, $x, "Name3");
							$price = mysql_result($result, $x, "Price");
							$catID = mysql_result($result, $x, "CategoryID");
							$Price=number_format($price,2);

							echo("Product ID: $prodID<br/>");
							echo("Title: $title<br/>");
							echo("Name1: $name1<br/>");
							echo("Name2: $name2<br/>");
							echo("Name3: $name3<br/>");
							echo("Quantity: $qty<br/>");
							echo("Price: $$Price<br/>");
							echo("<hr>");
							
							$Price=$price*$qty;
							
							$subTotal+=$Price;
						}
						//sets shipping price
						if($subTotal < 50)
						{
							if($totalItem<4)
							{
								$shipping=$totalItem*1.25;
							}
							elseif($totalItem<7)
							{
								$shipping=$totalItem*1;
							}
							elseif($totalItem<12)
							{
								$shipping=$totalItem*.90;
							}
							else
							{
								$shipping=$totalItem*.75;
							}
						}
						else
						{
							$shipping=0;
						}	
					}
					//display prices
					echo("Shipping: $$shipping<br/>");
					$taxTotal=$subTotal*$tax;
					$taxTotal=number_format($taxTotal,2);
					echo("Tax:   $$taxTotal<br/>");
					echo("Total:   $$subTotal<br/>");
					$subTotal+=$shipping;
					$subTotal+=$taxTotal;
					echo("Subtotal:   $$subTotal<br/>");	
					print('<form method="post" action = "finalize.php" onsubmit=" check();">');
					echo('<input type= "hidden" name="taxTotal" id="taxTotal" value="<?php $subTotal ?>" />');
					echo('<input type= "submit" name="submit" value="Finalize purchase" />');
					echo('</form>');
					//store in session variables for when finalize is called
					$_SESSION["Tax"]=$taxTotal;
					$_SESSION["shipping"]=$shipping;
					$_SESSION["total"]=$subTotal;
				}
					
				
				db_close();
			?>
			
			</div>
		</div>
	</body>
</html>