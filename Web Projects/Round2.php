<?php session_start()?>

	
<!--
//Name: Tim Turner 
//	 file: Round2.php
//	 csc385-010-fall 2013
//	 Dr.Schaper
//	 Presentation:12/4/2013
//	 URL:http://unixweb.kutztown.edu/~tturn265/Round2.php
//	 About: Displays the round 2 pairings to the use-->



 

<HTML>
	<head>
		<title> Round 2 </title>
		<link rel="stylesheet" type="text/css" a href="style.css"/>	
		<script type="text/javascript">
		//check to see if the value entered is valid 
			function check()
			{
				if( document.getElementById("player1game").value == "")
				{
					alert("You must enter the number of wins");
					document.getElementById('player1game').focus();
					return false;
				}
				if( document.getElementById("player1game").value !=0&&document.getElementById("player1game").value !=1&&document.getElementById("player1game").value !=2)
				{
				alert("You must enter a valid number of wins");
					document.getElementById('player1game').focus();
					return false;
				}
				if( document.getElementById("player2game").value == "")
				{
					alert("You must enter the number of wins");
					document.getElementById('player2game').focus();
					return false;
				}
				if( document.getElementById("player2game").value !=0&&document.getElementById("player12game").value !=1&&document.getElementById("player2game").value !=2)
				{
				alert("You must enter a valid number of wins");
					document.getElementById('player2game').focus();
					return false;
				}
				if( document.getElementById("player3game").value == "")
				{
					alert("You must enter the number of wins");
					document.getElementById('player3game').focus();
					return false;
				}
				if( document.getElementById("player3game").value !=0&&document.getElementById("player3game").value !=1&&document.getElementById("player3game").value !=2)
				{
				alert("You must enter a valid number of wins");
					document.getElementById('player3game').focus();
					return false;
				}
				if( document.getElementById("player4game").value == "")
				{
					alert("You must enter the number of wins");
					document.getElementById('player4game').focus();
					return false;
				}
				if( document.getElementById("player4game").value !=0&&document.getElementById("player4game").value !=1&&document.getElementById("player4game").value !=2)
				{
				alert("You must enter a valid number of wins");
					document.getElementById('player4game').focus();
					return false;
				}
				if( document.getElementById("player5game").value == "")
				{
					alert("You must enter the number of wins");
					document.getElementById('player5game').focus();
					return false;
				}
				if( document.getElementById("player5game").value !=0&&document.getElementById("player5game").value !=1&&document.getElementById("player5game").value !=2)
				{
				alert("You must enter a valid number of wins");
					document.getElementById('player5game').focus();
					return false;
				}
				if( document.getElementById("player6game").value == "")
				{
					alert("You must enter the number of wins");
					document.getElementById('player6game').focus();
					return false;
				}
				if( document.getElementById("player6game").value !=0&&document.getElementById("player6game").value !=1&&document.getElementById("player6game").value !=2)
				{
				alert("You must enter a valid number of wins");
					document.getElementById('player6game').focus();
					return false;
				}
				if( document.getElementById("player7game").value == "")
				{
					alert("You must enter the number of wins");
					document.getElementById('player7game').focus();
					return false;
				}
				if( document.getElementById("player7game").value !=0&&document.getElementById("player7game").value !=1&&document.getElementById("player7game").value !=2)
				{
				alert("You must enter a valid number of wins");
					document.getElementById('player7game').focus();
					return false;
				}
				if( document.getElementById("player8game").value == "")
				{
					alert("You must enter the number of wins");
					document.getElementById('player8game').focus();
					return false;
				}
				if( document.getElementById("player8game").value !=0&&document.getElementById("player8game").value !=1&&document.getElementById("player8game").value !=2)
				{
				alert("You must enter a valid number of wins");
					document.getElementById('player8game').focus();
					return false;
				}
				if( document.getElementById("player9game").value == "")
				{
					alert("You must enter the number of wins");
					document.getElementById('player9game').focus();
					return false;
				}
				if( document.getElementById("player9game").value !=0&&document.getElementById("player9game").value !=1&&document.getElementById("player9game").value !=2)
				{
				alert("You must enter a valid number of wins");
					document.getElementById('player9game').focus();
					return false;
				}if( document.getElementById("player10game").value == "")
				{
					alert("You must enter the number of wins");
					document.getElementById('player10game').focus();
					return false;
				}
				if( document.getElementById("player10game").value !=0&&document.getElementById("player10game").value !=1&&document.getElementById("player10game").value !=2)
				{
				alert("You must enter a valid number of wins");
					document.getElementById('player10game').focus();
					return false;
				}if( document.getElementById("player11game").value == "")
				{
					alert("You must enter the number of wins");
					document.getElementById('player11game').focus();
					return false;
				}
				if( document.getElementById("player11game").value !=0&&document.getElementById("player11game").value !=1&&document.getElementById("player11game").value !=2)
				{
				alert("You must enter a valid number of wins");
					document.getElementById('player11game').focus();
					return false;
				}if( document.getElementById("player12game").value == "")
				{
					alert("You must enter the number of wins");
					document.getElementById('player12game').focus();
					return false;
				}
				if( document.getElementById("player12game").value !=0&&document.getElementById("player12game").value !=1&&document.getElementById("player12game").value !=2)
				{
				alert("You must enter a valid number of wins");
					document.getElementById('player12game').focus();
					return false;
				}if( document.getElementById("player13game").value == "")
				{
					alert("You must enter the number of wins");
					document.getElementById('player13game').focus();
					return false;
				}
				if( document.getElementById("player13game").value !=0&&document.getElementById("player13game").value !=1&&document.getElementById("player13game").value !=2)
				{
				alert("You must enter a valid number of wins");
					document.getElementById('player13game').focus();
					return false;
				}if( document.getElementById("player14game").value == "")
				{
					alert("You must enter the number of wins");
					document.getElementById('player14game').focus();
					return false;
				}
				if( document.getElementById("player14game").value !=0&&document.getElementById("player14game").value !=1&&document.getElementById("player14game").value !=2)
				{
				alert("You must enter a valid number of wins");
					document.getElementById('player14game').focus();
					return false;
				}if( document.getElementById("player15game").value == "")
				{
					alert("You must enter the number of wins");
					document.getElementById('player15game').focus();
					return false;
				}
				if( document.getElementById("player15game").value !=0&&document.getElementById("player15game").value !=1&&document.getElementById("player15game").value !=2)
				{
				alert("You must enter a valid number of wins");
					document.getElementById('player15game').focus();
					return false;
				}if( document.getElementById("player16game").value == "")
				{
					alert("You must enter the number of wins");
					document.getElementById('player16game').focus();
					return false;
				}
				if( document.getElementById("player16game").value !=0&&document.getElementById("player16game").value !=1&&document.getElementById("player16game").value !=2)
				{
				alert("You must enter a valid number of wins");
					document.getElementById('player16game').focus();
					return false;
				}
				}

		</script>
	</head>
	<body>
		<div id="container" style="width:100%;height:100%;">
			<div id="header" style="Text-align:center;border-style:solid;border-color:black">
				<h1 style="margin-bottom:0;">Round 2</h1>
			</div>
			
			<div id="menu" style="height:50%;width:75%;float:left;">
				 
			<?php
			$Players=array();
			$Round2=array();
			$Players=$_SESSION['Players'];
			$numPlay=$_SESSION['numPlay'];
			$Round2=$_SESSION['Standings'];
			
			$_SESSION['Round2']=$Round2;
			
			//converts player ID to Player name
			for ($x =$numPlay; $x>=0 ; $x--){
			$Round2[$x]=$Players[$Round2[$x]];
			
			}
	$_SESSION['Round2']=$Round2;
			
			//checks to see if odd number of players, if so give the one in last a bye
		if($numPlay%2==1)
			{
			$Name=$Round2[$numPlay];
			echo("Bye: $Name <br/><br/><br/><br/>");
			for ($x = 1; $x <= $numPlay; $x++)
			{
				if($Players[$x]==$Name)
				{
				
			$Points=array();
			$GamesWon=array();
			$Gameslost=array();
			$MatchesWon=array();
			$Round1opp=array();
			
			$Round2opp[$x]=0;
			$Points[$x]=3;
			$_SESSION['Round2opp']=$Round2opp;
			$numPlay--;
			}
		
			
			}
			}
			//displays text boxes baised on players
			echo("<div id='content' style='height:50%;width:75%;float:right;'>");
			echo("<form onsubmit='return check();' action= 'Standings2.php' method='post'>");
			if($numPlay>=2){
			echo($Round2[1]);
			echo("<input name= 'player1game' id='player1game' type='text' size='10' /><br/>");
			echo("vs <br/>");
			echo($Round2[2]);
			echo("<input name= 'player2game' id='player2game' type='text' size='10' /><br/>");
			echo("<br/><br/>");
			}
			
			if($numPlay>=4){
			echo($Round2[3]);
			echo("<input name= 'player3game' id='player3game' type='text' size='10' /><br/>");
			echo("vs <br/>");
			echo($Round2[4]);
			echo("<input name= 'player4game' id='player4game' type='text' size='10' /><br/>");
			echo("<br/><br/>");
			}
			
			if($numPlay>=6){
			echo($Round2[5]);
			echo("<input name= 'player5game' id='player5game' type='text' size='10' /><br/>");
			echo("vs <br/>");
			echo($Round2[6]);
			echo("<input name= 'player6game' id='player6game' type='text' size='10' /><br/>");
			echo("<br/><br/>");
			}
			
			if($numPlay>=8){
			echo($Round2[7]);
			echo("<input name= 'player7game' id='player7game' type='text' size='10' /><br/>");
			echo("vs <br/>");
			echo($Round2[8]);
			echo("<input name= 'player8game' id='player8game' type='text' size='10' /><br/>");
			echo("<br/><br/>");
			}
			
			if($numPlay>=10){
			echo($Round2[9]);
			echo("<input name= 'player9game' id='player9game' type='text' size='10' /><br/>");
			echo("vs <br/>");
			echo($Round2[10]);
			echo("<input name= 'player10game' id='player10game' type='text' size='10' /><br/>");
			echo("<br/><br/>");
			}
			
			if($numPlay>=12){
			echo($Round2[11]);
			echo("<input name= 'player11game' id='player11game' type='text' size='10' /><br/>");
			echo("vs <br/>");
			echo($Round2[12]);
			echo("<input name= 'player12game' id='player12game' type='text' size='10' /><br/>");
			echo("<br/><br/>");
			}
			
			if($numPlay>=14){
			echo($Round2[13]);
			echo("<input name= 'player13game' id='player13game' type='text' size='10' /><br/>");
			echo("vs <br/>");
			echo($Round2[14]);
			echo("<input name= 'player14game' id='player14game' type='text' size='10' /><br/>");
			echo("<br/><br/>");
			}
			
			if($numPlay>=16){
			echo($Round2[15]);
			echo("<input name= 'player15game' id='player15game' type='text' size='10' /><br/>");
			echo("vs <br/>");
			echo($Round2[16]);
			echo("<input name= 'player16game' id='player16game' type='text' size='10' /><br/>");
			echo("<br/><br/>");
			}
			
			
			echo("<input type= 'submit' name='submit' value='Finish round 2' />");
			echo("</form>");
			echo("</div>");
			?>
			</div>
			
				
					
					
				
				
			</div>
		</div>
	</body>
</html>