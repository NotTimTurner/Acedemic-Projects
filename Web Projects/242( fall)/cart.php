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
	"<th>Salary</th>" . "<th>Quantity</th></tr>";  
	print "<form action= 'dispCart.php' method='post'>";
 for( $i=0; $i<$numR; $i++) 
	{
		$eid = mysql_result($res,$i,"id");
		$ename = mysql_result($res,$i,"name");
		$esal = mysql_result($res,$i,"sal");
		$edno = mysql_result($res,$i,"dno");
	
	
   print "<tr> <td> $eid</td> <td>$ename</td> <td>$esal</td>" .
			"<td>" . "<input type= 'text' name= 'quantity$i' id ='quantity$i' size='4'/>";
			print(" <input type=hidden name='prod$i' value = '$prodID'/>");
			print("</td> </tr>");
		
		
   }
   
   print(" <input type=hidden name='numR' value = '$numR'/>");
   print(" <input type='submit' name='addToCart' value = 'Add To Cart'/>");
   print("</form> </td> </tr>");

  @mysql_close($connection);
  
?>	