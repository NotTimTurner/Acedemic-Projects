<?php Session_start();?>
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
	<a href= "browse.php" >Browse Catagories</a>
	<a href= "contact.html" >Contact Us</a></p>

<?php
  $DB_HOST='localhost';
  $DB_USER='tturn265';
  $DB_PASS='turner';
  $connection= mysql_connect($DB_HOST,$DB_USER,$DB_PASS);
  mysql_select_db('tturn265_db');
    $query= "select * from Categories";
  $results= mysql_query($query);
  $num= mysql_numrows($results); 
for($i = 0; $i < $num; $i++)
					{
						print('<a href = "products.php?catID=');
						print(mysql_result($results, $i, "CategoryID"));
						$catname = mysql_result($results, $i, "CategoryName");
						print('">');
						print($catname);
						print('</a><br/> ');
					}
 @mysql_close($connection);
?>
 </body>
</html>