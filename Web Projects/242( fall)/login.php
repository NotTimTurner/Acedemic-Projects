<?php
  Session_start();
  $DB_HOST='localhost';
  $DB_USER='tturn265';
  $DB_PASS='turner';
  $connection= mysql_connect($DB_HOST,$DB_USER,$DB_PASS);
  mysql_select_db('tturn265_db');
    $query= "select * from Customers";
  $res= mysql_query($query);
  $numR= mysql_numrows($res);
  

$Email = $_POST['eAdr'];
$passwd = $_POST['Pass'];



 for( $i=0; $i<$numR; $i++) 
	{
		$dEmail = mysql_result($res,$i,"Email");
		$dPass = mysql_result($res,$i,"Passwd");

		
			
		if($Email==$dEmail )
		{ 
			if($passwd==$dPass)
			{
				print "you have logged in";
			
				$_SESSION["NAME"]=mysql_result($res,$i,"CustomerID");
			}
			else
			print" incorrect password";
		}

	}
	
  @mysql_close($connection);
  

	PRINT" click <a href='homepage.html'> here</a> to return home";

?>