<?php session_start()?>	
	<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
//Name: Tim Turner 
//		file: Logout.php
//	csc242-010-spring 2013
//		Dr.Frye
//		Due Date:5/4/2013
//		URL:http://unixweb.kutztown.edu/~tturn265/Logout.php
//		About: Logs the user out if they want to-->
<HTML>
	<head>
		<title> logout </title>
		<link rel="stylesheet" type="text/css" a href="style.css"/>	
		<script type="text/javascript">
		<!--
			//check to see if the user really wants to logout
			function check()
			{
				var x;
				var r=confirm("are you sure you want to logout");
				//if yes destroys the session
				if (r==true)
				  {
					<?php session_destroy();?>
					document.writeln("you have been logged out");
				  }
				  //else prompts them home
				else
				  {
					document.writeln(" Click  ");
					document.writeln('<a href = "Project.html">Here</a>');
					document.writeln(" to return home");
				  }
			}
	  -->
	  </script>
	</head>
	<body>
		<div id="container" style="width:100%;height:100%;">
			<div id="header" style="Text-align:center;border-style:solid;border-color:black">
				<h1 style="margin-bottom:0;">Logout</h1>
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
			//check to see if the user is actually logged in
			if($_SESSION["Name"]==null)
			{
				print(" you are not logged in");
			}
			//if they are brings up the prompt asking them if they want to logout
			else 
			{
			print('<script type="text/javascript">');
			print('window.onload(check());');
			print('</script>');
			}
			?>
			 </div>
		</div>
	</body>
</html>