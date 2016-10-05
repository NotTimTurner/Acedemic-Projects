<?session_start( )?>
<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!--
     Name:         Tim Turner
     Assignment : Book store project homepage
	 Purpose:	   desplay the homepage for my bookstore
     URL:          http://unixweb.kutztown.edu/~tturn265/homepage.html
     Course:       CSC 242 - Fall 2012
     Due Date:     -2012
-->

<html xmlns = "http://www.w3.org/1999/xhtml">
   <head>
      <title>Browse Products  </title>
          <link rel="stylesheet" type="text/css" a href="style.css"/>
   </head> 
   <body>
    
   

	<p style=text-align:center><a href= "homepage.html" >Home</a>
	<a href= "New.html" >Create a new account</a>
	<a href= "login.html" >login</a>
	<a href= "browse.php" >Browse Categories</a>
	<a href= "contact.html" >Contact Us</a></p>

<?PHP 
//print "<table border='1'><tr><th>Product ID</th>". "<th>Title</th>" .
	//"<th>Price</th>" ."<th>Author1</th>" ."<th>Author2</th>" ."<th>Author3</th>" . "<th>Quantity</th></tr>";  
	//print "<form action= 'dispCart.php' method='post'>";
for($i=0; $i<$_POST["num"]; $i++)
{	
	print "stuff";
   print "$id" ;
	//$qty= "quantity" . $i;
	//if($_POST["qty"]!="")
	//	print "$_POST[$Title] <br />";
}
?>
</body>
</html>
