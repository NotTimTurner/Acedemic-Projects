<?php
$DB_HOST='localhost';
  $DB_USER='tturn265';
  $DB_PASS='turner';
  
  $connection= mysql_connect($DB_HOST,$DB_USER,$DB_PASS);
  mysql_select_db('tturn265_db');
  $query= "select * from emp";
  $res= mysql_query($query);
  $numR= mysql_numrows($res);
  
  print "<table border='1'><tr><th>Employee ID</th>". "<th>Name</th>" .
	"<th>Salary</th></tr>";  
 for( $i=0; $i<$numR; $i++) 
	{
		$eid = mysql_result($res,$i,"id");
		$ename = mysql_result($res,$i,"name");
		$esal = mysql_result($res,$i,"sal");
		$edno = mysql_result($res,$i,"dno");
	print "ID: $eid Name: $ename Salary $esal Dept#: $edno <br />";
	
   print "<tr> <td> $eid</td> <td>$ename</td> <td>$esal</td> </tr>"; 
   }
  @mysql_close($connection);
  
?>	
