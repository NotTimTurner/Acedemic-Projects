<?php
/*Name: Tim Turner 
		file: NewAcount.php
		csc242-010-spring 2013
		Dr.Frye
		Due Date:4/4/2012
		URL:http://unixweb.kutztown.edu/~tturn265/NewAccount.php
		About: Prints the information from NewAccount.html
*/
require("dbconn.php");
db_connect();
?>
<html>
	<head>
		<title> New Account </title>
		<link rel="stylesheet" type="text/css" a href="style.css"/>		
	</head>
	<body>
		<div id="container" style="width:100%;height:100%;">

			<div id="header" style="Text-align:center;border-style:solid;border-color:black">
				<h1 style="margin-bottom:0;">Create an Account</h1>
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
				// difine variables( not needed but personal preference) 
				$FirstName = $_POST['fName'];
				$LastName = $_POST['lName'];
				$Email = $_POST['eAdr'];
				$passwd = $_POST['Pass'];
				$Address1 = $_POST['adr'];
				$City = $_POST['city'];
				$ZipCode= $_POST['zip'];
				$State = $_POST['State'];
				$PhoneNumber = $_POST['pNum'];
				$Address2 = $_POST['adr2'];
				
				//set query to see if account exists
				$query="select Email from Customers where Email='$Email'";
				//run query
				$res= mysql_query($query) or die( "error" .mysql_error());
				$numR= mysql_numrows($res);

				if($numR>0)
				{
					print" the account already exists";
				}
				else 
				{
					$query= "INSERT INTO Customers (Email,passwd,FirstName,LastName,Address1,Address2,ZIpCode,State,PhoneNumber,City) VALUES ('$Email','$passwd','$FirstName','$LastName','$Address1','$Address2',$ZipCode,'$State','$PhoneNumber','$City')";
					  @mysql_query($query)or die( "error" .mysql_error());;

					print"First name: $FirstName <br/>";
					print"Last Name: $LastName <br/>";
					print"Email Address: $Email <br/>";
					print"Password: $passwd <br/>";
					print"Address: $Address1 <br/>";
					print"City: $City <br/>";
					print"Zip Code: $ZipCode <br/>";
					print"State: $State <br/>";
					if($PhoneNumber!="")
					print"Phone Number: $PhoneNumber <br/>";
					if($Address2!="")
					print"Alt Address: $Address2 <br/>";

					print("Your Account was created $FirstName");
				}
				db_close();
				?>
			</div>

			<div id="footer" style="clear:both;text-align:center;border-style:solid;border-color:black">
				This is a school project. Please note that none of this is real.
			</div>
		</div>
	</body>
</html>

