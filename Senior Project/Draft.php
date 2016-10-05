<?php session_start()?>

	
<!--
//Name: Tim Turner 
//	 file: Draft.php
//	 csc385-010-fall 2013
//	 Dr.Schaper
//	 Presentation:12/4/2013
//	 URL:http://unixweb.kutztown.edu/~tturn265/Draft.php
//	 About: Lets the user enter in names-->



 

<HTML>
	<head>
		<title> Add a Player </title>
		<link rel="stylesheet" type="text/css" a href="style.css"/>	
		<script type="text/javascript">
		//checks if the field is empty
		function check()
			{if( document.getElementById("Name").value == "")
				{
					alert("You must enter your fist name");
					document.getElementById('Name').focus();
					return false;
				}
		
 }
		</script>
	</head>
	<body>
		<div id="container" style="width:100%;height:100%;">
			<div id="header" style="Text-align:center;border-style:solid;border-color:black">
				<h1 style="margin-bottom:0;">Add a Player</h1>
			</div>

			<div id="content" style="height:50%;width:75%;float:left;">
				<form onsubmit=" return check();"action= "Tour.PHP" method="post">
					<p><label>* Name 
					<input name= "Name" id="Name" type="text" size="25" />
					
					<br>
					<br>
					<input type= "submit" name="submit" value="Add Player" />
				</form>
			</div>
		</div>
	</body>
</html>