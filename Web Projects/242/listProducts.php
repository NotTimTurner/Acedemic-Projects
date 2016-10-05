<?php session_start()?>	
<!--
//Name: Tim Turner 
//		file: listProducts.php
//		csc242-010-spring 2013
//		Dr.Frye
//		Due Date:5/4/2013
//		URL:http://unixweb.kutztown.edu/~tturn265/listProducts.php
//		About: list all the products by catigory-->
<HTML>
	<head>
		<title> Browse Catalog </title>
		<link rel="stylesheet" type="text/css" a href="style.css"/>			
	</head>
		<body>
			<div id="container" style="width:100%;height:100%;">

			 <div id="header" style="Text-align:center;border-style:solid;border-color:black">
				<h1 style="margin-bottom:0;">Products</h1>
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
			   $connection;
			require("dbconn.php");
			   db_connect();
			   
			   $ID = $_GET['catID'];
			   $CatName=$_GET['catName'];
			   
			   //grabs all the products by a ID
			   $query="SELECT * FROM Products 
			WHERE CategoryID = '$ID'";
			   $result = mysql_query($query) or
					 die("Error accessing Products table: " .  mysql_error());

			   //Get the total number of products
			   $num = mysql_numrows($result);

				//if no products
			   if($num==0){
			print"Sorry this catigory has no products";
			}

			   //Loop through all products
			   for ($i = 0; $i < $num; $i++)
			   {
					//grabs product from database
					$prodID=mysql_result($result, $i, "ProductID");
					$title = mysql_result($result, $i, "Title");
					$name1 = mysql_result($result, $i, "Name1");
					$name2 = mysql_result($result, $i, "Name2");
					$name3 = mysql_result($result, $i, "Name3");
					$qty = mysql_result($result, $i, "Quantity");
					$price = mysql_result($result, $i, "Price");
					$catID = mysql_result($result, $i, "CategoryID");
					$Price=number_format($price,2);
					//print productto screen
					echo("Product ID: $prodID<br/>");
					echo("Title: $title<br/>");
					echo("Name1: $name1<br/>");
					echo("Name2: $name2<br/>");
					echo("Name3: $name3<br/>");
					echo("Quantity: $qty<br/>");
					echo("Price: $$Price<br/>");
					//quantity field and add to cart button
					print('<form method="post" action = "addToCart.php?pID=');
					echo(mysql_result($result, $i, "ProductID"));
					echo('" onsubmit=" return check();">');
					echo("<p><label>* Quantity ");
					echo('<input name= "qty" id="qty" type="text" size="25" />');
					echo('<input type= "submit" name="submit" value="Add to Cart" />');
					echo('</form>');
					echo("<hr>");

			   }

			  db_close();
			?>
			</div>




			</div>
			</body>
			</html>