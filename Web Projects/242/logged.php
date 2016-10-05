<?php session_start()?>	
	<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
//Name: Tim Turner 
//		file: Logged.php
//		csc242-010-spring 2013
//		Dr.Frye
//		Due Date:5/3/2013
//		URL:http://unixweb.kutztown.edu/~tturn265/Logged.php
//		About: behind the sceens file that actually logs to person in-->
<HTML>
	<head>
		<title> login </title>
		<link rel="stylesheet" type="text/css" a href="style.css"/>	
	</head>
	<body>
		<div id="container" style="width:100%;height:100%;">
			<div id="header" style="Text-align:center;border-style:solid;border-color:black">
				<h1 style="margin-bottom:0;">Login</h1>
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
					$Email = $_POST['eAdr'];
					$passwd = $_POST['Pass'];
					//check to see if user is already logged in
					if($_SESSION["Email"]!=$Email)
					{
					
						$query="select Email from Customers where Email='$Email'";
						$result = mysql_query($query) or die("Error accessing Customers table: " .  mysql_error());
						$num = mysql_numrows($result);
						//check to see if account exists
						if($num==0)
						{
							print(" this account does not exist click ");
							print('<a href = "NewAccount.html">Here</a>');
							print(" to make a new Account");
						}
						
						$query="select Email from Customers where passwd='$passwd' and Email='$Email' ";
						$result = mysql_query($query) or die("Error accessing Customers table: " .  mysql_error());
						$num = mysql_numrows($result);
						if($num==0)
						{
							print("you entered the wrong password");
						}
						
						if($num!=0)
						{
						$query="select FirstName from Customers where passwd='$passwd' and Email='$Email' ";
						
						$result =  mysql_query($query) or die("Error accessing Customers table: " .  mysql_error());
						$num = mysql_numrows($result);
						for($i = 0; $i < $num; $i++)
						{
						$_SESSION["Name"] =(mysql_result($result,$i,"FirstName"));
						$name=$_SESSION["Name"];
						}
						
						$_SESSION["Email"]=$Email;
						$_SESSION['numItems']=0;
						$_SESSION['productID']= array();
						$_SESSION['quantity'] = array();
						
						print("Thank you for logging in $name ");
						}
					}
					
					else 
					print("you are already logged in $name ");

				 db_close();
				?>
			</div>
		</div>
	</body>
</html>