
  <?php

$eid = $_POST['eid'];
$ename = $_POST['ename'];
$esal = $_POST['esal'];
$edno = $_POST['edno'];



// Print the received data:
echo "<h3>The data received from the Form is: </h3>" ;
print  "Emp ID: $eid <br />
		Name: $ename <br />
		Salary: $esal <br />
		Dept#: $edno 	";
		
		
  $DB_HOST='localhost';
  $DB_USER='tturn265';
  $DB_PASS='turner';
  
  $connection= mysql_connect($DB_HOST,$DB_USER,$DB_PASS);
  mysql_select_db('tturn265_db');
  $query= "INSERT INTO emp VALUES ($eid,'$ename',$esal,$edno)";
  @mysql_query($query);
  @mysql_close($connection);
  
?>	
