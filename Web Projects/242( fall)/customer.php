
  <?php
   session_start ( );
  $DB_HOST='localhost';
  $DB_USER='tturn265';
  $DB_PASS='turner';
  $connection= mysql_connect($DB_HOST,$DB_USER,$DB_PASS);
  mysql_select_db('tturn265_db');
    $query= "select * from Customers";
  $res= mysql_query($query);
  $numR= mysql_numrows($res);
  
$FirstName = $_POST['fName'];
$LastName = $_POST['lName'];
$Email = $_POST['eAdr'];
$passwd = $_POST['Pass'];
$Address1 = $_POST['adr'];
$City = $_POST['city'];
$ZipCode= $_POST['zip'];
$State = $_POST['sta'];
$PhoneNumber = $_POST['pNum'];
$Address2 = $_POST['adr2'];
$numR= mysql_numrows($res);



	
$numR+=1;

		

  

  $query= "INSERT INTO Customers VALUES ($numR,'$Email','$passwd','$FirstName','$LastName','$Address1','$Address2',$ZipCode,'$State','$PhoneNumber','$City')";
  @mysql_query($query);
  @mysql_close($connection);
  ?>
  <html>
  <body>
<link rel="stylesheet" type="text/css" a href="style.css"/>
  <p> you have sucfully created a account click <a href= "login.html">here</a> to Login or <a href= "homepage.html">here</a> to return home </P>
  </body>
  </html>
	
