<?php session_start()?>	
<!--
//Name: Tim Turner 
//	 file: Login.php
//	 csc242-010-spring 2013
//	 Dr.Frye
//	 Due Date:5/3/2013
//	 URL:http://unixweb.kutztown.edu/~tturn265/Login.php
//	 About: Login a user if the account exists-->
<HTML>
	<head>
		<title> Login </title>
		<link rel="stylesheet" type="text/css" a href="style.css"/>	
		<script type="text/javascript">
		<!--
		//checks to see if fields are not empty when a user hits submit
		function check()
		{
			//alert("atleast this works");
			if( document.getElementById("eAdr").value=="")
			{
				alert("You must enter your Email");
				document.getElementById("eAdr").focus();
				return false;
			}
			if( document.getElementById("Pass").value=="")
			{
				alert("You must enter a password ");
				document.getElementById("Pass").focus();
				return false;
			}

		}
		-->
		</script>
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
				<form onsubmit=" return check();"action= "logged.php" method="post">
					<p><label>* E-Mail Address 
					<input name= "eAdr" id="eAdr" type="text" size="25" />
					<p><label>* Password 
					<input name= "Pass" id="Pass" type="text" size="25" />
					<br>
					<br>
					<input type= "submit" name="submit" value="Login" />
				</form>
			</div>
		</div>
	</body>
</html>