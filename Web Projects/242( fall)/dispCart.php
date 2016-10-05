<?PHP //dispCart.php

print "<table border='1'><tr><th>Product ID</th>". "<th>Title</th>" .
	"<th>Price</th>" ."<th>Author1</th>" ."<th>Author2</th>" ."<th>Author3</th>" . "<th>Quantity</th></tr>";  
	print "<form action= 'dispCart.php' method='post'>";
for($i=0; $i<$_POST["num"]; $i++)
{	
	//$qty= "quantity" . $i;
	//if($_POST["qty"]!="")
		print "$_POST[$Title] <br />";
}
?>