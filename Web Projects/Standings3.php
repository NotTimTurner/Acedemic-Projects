<?php session_start()?>

	
<!--
//Name: Tim Turner 
//	 file: Standings3.php
//	 csc385-010-fall 2013
//	 Dr.Schaper
//	 Presentation:12/4/2013
//	 URL:http://unixweb.kutztown.edu/~tturn265/Standings3.php
//	 About: Displays the standings after round 3 is over-->



 

<HTML>
	<head>
		<title> Round 3 Standings </title>
		<link rel="stylesheet" type="text/css" a href="style.css"/>	
		<script type="text/javascript">

		</script>
	</head>
	<body>
		<div id="container" style="width:100%;height:100%;">
			<div id="header" style="Text-align:center;border-style:solid;border-color:black">
				<h1 style="margin-bottom:0;">Standings after round 3</h1>
			</div>
			
			<div id="content" style="height:50%;width:75%;float:left;">
				 
			<?php
			
			
			
				$Points=array();
				$Points=$_SESSION['Points'];
				$GamesWon=array();
				$GamesLost=array();
				$GamesLost2=array();
				$GamesWon2=array();
				$MatchesWon=array();
				$Round1opp=array();
				$Round2opp=array();
				$Round3opp=array();
				$Round1=array();
				$Round2=array();
				$Round3=array();
				$Players=array();
				$Matchwin=array();
				$Breaker1=array();
				$Breaker2=array();
				$Standings=array();
				$Checked=array();
				$totalGamesWon=array();

			$Players=$_SESSION['Players'];
			$numPlay=$_SESSION['numPlay'];
			$Breaker1=$_SESSION['Breaker1'];
			$Breaker2=$_SESSION['Breaker2'];
			
				
			$Round1=$_SESSION['Round1'];
			$Round2=$_SESSION['Round2'];
			$Round3=$_SESSION['Round3'];
			
			$Round1opp=$_SESSION['Round1opp'];
			$GamesWon=$_SESSION['GamesWon'];
			$GamesLost=$_SESSION['GamesLost'];
			$MatchesWon=$_SESSION['MatchesWon'];
			$count=$numPlay;
			

		
		
					for ($x = 1; $x <= $numPlay; $x++)
			{
			
				for ($y = 1; $y <= $numPlay; $y++)
				{
				
				//grab the games that player won
				if($Round3[$x]==$Players[$y])
				{
				 
					if($x==1)
					{
					$games=$_POST['player1game'];
					$GamesWon2[$y]=$games;
					}
					
					if($x==2)
					{
					$games=$_POST['player2game'];
					$GamesWon2[$y]=$games;
					}
					
					if($x==3)
					{
					$games=$_POST['player3game'];
					$GamesWon2[$y]=$games;
					}
					
					if($x==4)
					{
					$games=$_POST['player4game'];
					$GamesWon2[$y]=$games;
					}
					
					if($x==5)
					{
					$games=$_POST['player5game'];
					$GamesWon2[$y]=$games;
					}
					
					if($x==6)
					{
					$games=$_POST['player6game'];
					$GamesWon2[$y]=$games;
					}
					
					if($x==7)
					{
					$games=$_POST['player7game'];
					$GamesWon2[$y]=$games;
					}
					
					if($x==8)
					{
					$games=$_POST['player8game'];
					$GamesWon2[$y]=$games;
					}
					
					if($x==9)
					{
					$games=$_POST['player9game'];
					$GamesWon2[$y]=$games;
					}
					
					if($x==10)
					{
					$games=$_POST['player10game'];
					$GamesWon2[$y]=$games;
					}
					if($x==11)
					{
					$games=$_POST['player11game'];
					$GamesWon2[$y]=$games;
					}
					if($x==12)
					{
					$games=$_POST['player12game'];
					$GamesWon2[$y]=$games;
					}
					if($x==13)
					{
					$games=$_POST['player13game'];
					$GamesWon2[$y]=$games;
					}
					if($x==14)
					{
					$games=$_POST['player14game'];
					$GamesWon2[$y]=$games;
					}
					if($x==15)
					{
					$games=$_POST['player15game'];
					$GamesWon2[$y]=$games;
					}
					if($x==16)
					{
					$games=$_POST['player16game'];
					$GamesWon2[$y]=$games;
					}
		
			
					
					
					$count=$x;

					if($x%2==1)
					$opp=$Round3[$x+1];
					else
					$opp=$Round3[$x-1];
					//grabs round one opponent

					//grabs games lost
					for ($t = 1; $t <= $numPlay; $t++)
					{
						if($opp==$Players[$t])
							{
					if($t==1)
					{
					$game=$_POST['player1game'];
					$Round3opp[$y]=$t;
					}
					if($t==2)
					{
					$game=$_POST['player2game'];
					$Round3opp[$y]=$t;
					}
					if($t==3)
					{
					$game=$_POST['player3game'];
					$Round3opp[$y]=$t;
					}
					
					if($t==4)
					{
					$game=$_POST['player4game'];
					$Round3opp[$y]=$t;
					}
					
					if($t==5)
					{
					
					$game=$_POST['player5game'];
					$Round3opp[$y]=$t;
					}
					if($t==6)
					{
					
					$game=$_POST['player6game'];
					$Round3opp[$y]=$t;
					}
					if($t==7)
					{
					$game=$_POST['player7game'];
					$Round3opp[$y]=$t;
					}
				
					if($t==8)
					{
					$game=$_POST['player8game'];
					$Round3opp[$y]=$t;
					}
					
					if($t==9)
					{
					$game=$_POST['player9game'];
					$Round3opp[$y]=$t;
					}
				
					if($t==10)
					{
					$game=$_POST['player10game'];
					$Round3opp[$y]=$t;
					}
					
					if($t==11)
					{
					$game=$_POST['player11game'];
					$Round3opp[$y]=$t;
					}
					
					if($t==12)
					{
					$game=$_POST['player12game'];
					$Round3opp[$y]=$t;
					}
					
					if($t==13)
					{
					$game=$_POST['player13game'];
					$Round3opp[$y]=$t;
					}
					
					if($t==14)
					{
					$game=$_POST['player14game'];
					$Round3opp[$y]=$t;
					}
					if($t==15)
					{
					$game=$_POST['player15game'];
					$Round3opp[$y]=$t;
					}
					if($t==16)
					{
					$game=$_POST['player16game'];
					$Round3opp[$y]=$t;
					}
					
					}
					$GamesLost2[$y]=$GamesWon2[$Round2opp[$y]];
				}
				
				}
				}
			}		

		

			//grabs total games won, lost, and played
				for ($x = 1; $x <= $numPlay; $x++)
				{

				$GamesLost2[$x]=$GamesWon2[$Round3opp[$x]];

				$totalGamesWon[$x]=$GamesWon[$x]+$GamesWon2[$x];
				$totalGamesLost[$x]=$GamesLost[$x]+$GamesLost2[$x];
				}
				
			
		$Points=$_SESSION['Points'];
		//assigns points
			for ($x = 1; $x <= $numPlay; $x++)
			{
			if($Round3opp[$x]!=0)
			{
			
			if($GamesWon2[$x]==$GamesLost2[$x]){
			$Points[$x]+=1;
			$MatchesWon[$x]+=0;
			}	
			if($GamesWon2[$x]>$GamesLost2[$x]){
			$Points[$x]+=3;
			$MatchesWon[$x]+=1;
			}
			if($GamesWon2[$x]<$GamesLost2[$x]){
			$Points[$x]+=0;
			$MatchesWon[$x]+=0;
			}
			}
			}

				//assigns points and tie breakers if a player had a bye
			for ($x = 1; $x <= $numPlay; $x++)
			{
			if($Round3opp[$x]==0)
			{
			echo $Player[$x];
			$Points[$x]+=3;
			$Breaker1[$x]+=0;
			$Breaker2[$x]+=0;
			$MatchesWon[$x]+=1;
			}
			}
			
			//assigns tie breakers
			for ($x = 1; $x <= $numPlay; $x++)
			{
			$opp3=$Round3opp[$x];
			$opp2=$Round2opp[$x];
			$opp1=$Round1opp[$x];
			$Breaker1[$x]=100*((($Points[$opp1]/9)+($Points[$opp2]/9)+($Points[$opp3]/6))/3);
			$gamesplayed=$totalGamesWon[$x]+$totalGamesLost[$x];
			$Breaker2[$x]=100*(($totalGamesWon[$x]*3)/($gamesplayed*3));
			
			}
			//sorts players by points than first tie breakers than second tie breakers
			for ($t = 1; $t <= $numPlay; $t++)
			{ //echo x;
			$Standings[$t]=$t;
				$count=0;
				while($count<$t)
				{
				for ($x = 1; $x <= $t; $x++)
				{
				
				if($x!=1)
				{
					for ($y = 1; $y <= $x; $y++)
					{
					
						if($x!=$y){
							if($Points[$Standings[$x]]>$Points[$Standings[$y]])
							{
							$temp=$Standings[$x];
							$Standings[$x]=$Standings[$y];
							$Standings[$y]=$temp;
							
							}
							if($Points[$Standings[$x]]==$Points[$Standings[$y]])
							{
								if($Breaker1[$Standings[$x]]>$Breaker1[$Standings[$y]])
								{
								$temp=$Standings[$x];
								$Standings[$x]=$Standings[$y];
								$Standings[$y]=$temp;
							
								}
								if($Breaker1[$Standings[$x]]==$Breaker1[$Standings[$y]])
								{
									if($Breaker2[$Standings[$x]]>$Breaker2[$Standings[$y]])
									{
									$temp=$Standings[$x];
									$Standings[$x]=$Standings[$y];
									$Standings[$y]=$temp;
							
									}
								
							
								}
							
							}
				
						}
					
					}
					}
				}
				$count++;
			}
		}

			for ($x = 1; $x <= $numPlay; $x++)
			{
	
			$place=$Standings[$x];
			$opp=$Round3opp[$place];
		
			echo(" Place:$x Name:$Players[$place]   Points: $Points[$place]  Breaker 1: $Breaker1[$place]% Breaker2:$Breaker2[$place]% ");
			echo("<br/><br/><br/>");
			}
			$_SESSION['Breaker1']=$Breaker1;
			$_SESSION['Breaker2']=$Breaker2;
			$_SESSION['MatchesWon']=$MatchesWon;
			$_SESSION['Standings']=$Standings;
			$_SESSION['Points']=$Points;
			$_SESSION['Round2opp']=$Round2opp;
			$_SESSION['GamesLost']=$totalGamesLost;
			$_SESSION['GamesWon']=$totalGamesWon;
			
			
			?>
			
			</div>
			<?php
			if($numPlay>8){
			echo"<div id='content' style='height:50%;width:60%;float:right;'>";
				
			echo"<form action= 'Round3.php' method='post'>";
					
					echo"<input type= 'submit' name='submit' value='Begin Round 3' />";
				echo"</form>";
			echo"</div>";
			}
			?>
		</div>
	</body>
</html>