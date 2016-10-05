<?php session_start()?>

	
<!--
//Name: Tim Turner 
//	 file: Login.php
//	 csc242-010-spring 2013
//	 Dr.Frye
//	 Due Date:5/3/2013
//	 URL:http://unixweb.kutztown.edu/~tturn265/Draft.php
//	 About: Login a user if the account exists-->



 

<HTML>
	<head>
		<title> Players </title>
		<link rel="stylesheet" type="text/css" a href="style.css"/>	
		<script type="text/javascript">

		</script>
	</head>
	<body>
		<div id="container" style="width:100%;height:100%;">
			<div id="header" style="Text-align:center;border-style:solid;border-color:black">
				<h1 style="margin-bottom:0;">Players</h1>
			</div>
			
			<div id="content" style="height:50%;width:75%;float:left;">
				 
			<?php
			
			$Name=$_POST['Name'];
		//echo($Name);
		$Players=array();
		$Players=$_SESSION['Players'];
		$_SESSION['numPlay']++;
		$numPlay=$_SESSION['numPlay'];
		$test=0;
		//echo($numPlay);
		
		for ($x = 1; $x <= $numPlay; $x++)
		{
			if($Players[$x]==$Name){
			echo" this player has already been added. please choose another<br/><br/><br/><br/>";
			echo"<form action= 'Draft.php' method='post'>";
					
					echo"<input type= 'submit' name='submit' value='Add another Player' />";
				echo"</form>";
			$test=1;
			$_SESSION['numPlay']--;
			}
		}
		
		if($test==0){
		
		
		$Players[$numPlay]=$Name;
		//echo($Players[$numPlay]);
		$_SESSION['Players']=$Players;
		
		for ($x = 1; $x <= $numPlay; $x++)
		{
			echo("Player $x:");
			echo($Players[$x]);
			echo('<br/>');
			
			}
			
			?>
			</div>
			<div id="content" style="height:50%;width:75%;float:left;">
			<?php
			if($numPlay<8){
				echo"<form action= 'Draft.php' method='post'>";
					
					echo"<input type= 'submit' name='submit' value='Add another Player' />";
				echo"</form>";
				}
				
				
				echo"<form action= 'Round1.php' method='post'>";
					
					echo"<input type= 'submit' name='submit' value='Begin Round 1' />";
				echo"</form>";
				}
				?>
			</div>
		</div>
	</body>
</html>