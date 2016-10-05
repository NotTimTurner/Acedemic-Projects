<?php session_start()?>	
<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
   
   <!-- Name: Tim Turner 
		file: products.php
		csc242-010-spring 2013
		Dr.Frye
		Due Date:5/4/2013
		URL:http://unixweb.kutztown.edu/~tturn265/products.php
		About: list all the products by catigory-->
<HTML>
	<head>
		<title> Browse Catalog </title>
		<link rel="stylesheet" type="text/css" a href="style.css"/>	


	</head>
	<body>
		<div id="container" style="width:100%;height:100%;">
			<div id="header" style="Text-align:center;border-style:solid;border-color:black">
				<h1 style="margin-bottom:0;">Browse Catalog</h1>
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
				<p>Please select the item you wish to browse:</P>
				<?php
					require("dbconn.php");
					db_connect();
					//looks up product catigories
					$query= "SELECT CategoryID, CategoryName FROM Categories";
					$results= mysql_query($query);
					$num= mysql_numrows($results);
					//displays the catigories in a link
					for($i = 0; $i < $num; $i++)
					{
						print('<a href = "listProducts.php?catID=');
						print(mysql_result($results, $i, "CategoryID"));
						$catname = mysql_result($results, $i, "CategoryName");
						print('?catName='); 
						print(mysql_result($results, $i, "CategoryName"));
						print('">');
						print($catname);
						print('</a><br/> ');
					}
				
				db_close();
				?>	
		  </div>
		</div>
	</body>
</html>