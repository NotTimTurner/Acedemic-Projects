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

<?php
 $DB_HOST='localhost';
  $DB_USER='tturn265';
  $DB_PASS='turner';
  $id = $_GET['catID'];

  $connection= mysql_connect($DB_HOST,$DB_USER,$DB_PASS);
  mysql_select_db('tturn265_db');
    $query= "select * from Products where CategoryID=$id";
  $results= mysql_query($query);
  $num= mysql_numrows($results);
  print "<table border='1'><tr><th>Product ID</th>". "<th>Title</th>" .
	"<th>Price</th>" ."<th>Author1</th>" ."<th>Author2</th>" ."<th>Author3</th>" . "<th>Quantity</th></tr>";  
	print "<form action= 'shoppingcart.php' method='post'>";
 for( $i=0; $i<$num; $i++) 
	{
		$id = mysql_result($results,$i,"ProductID");
		$Title = mysql_result($results,$i,"Title");
		$Price = mysql_result($results,$i,"Price");
		$author1 = mysql_result($results,$i,"Author1");
		$author2 = mysql_result($results,$i,"Author2");
		$author3 = mysql_result($results,$i,"Author3");
		$english_format_number=number_format($Price,2);
	
   print "<tr> <td> $id</td> <td>$Title</td> <td>$english_format_number</td> <td>$author1</td> <td>$author2</td> <td>$author3</td>" .
			"<td>" . "<input type= 'text' name= 'quantity$i' id ='quantity$i' size='4'/>";
			print(" <input type=hidden name='prod$i' value = '$prodID'/>");
			print("</td> </tr>");
		
		
   }
   
   print(" <input type=hidden name='num' value = '$num'/>");
   print(" <input type='submit' name='addToCart' value = 'Add To Cart'/>");
   print("</form> </td> </tr>");


 @mysql_close($connection);

?>
 </body>
</html>
