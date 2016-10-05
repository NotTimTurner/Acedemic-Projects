<?php session_start()?>

	
<!--
//Name: Tim Turner 
//	 file: Standings1.php
//	 csc385-010-fall 2013
//	 Dr.Schaper
//	 Presentation:12/4/2013
//	 URL:http://unixweb.kutztown.edu/~tturn265/Standings1.php
//	 About: Displays the standings after round 1 is over-->



 

<HTML>
	<head>
		<title> Round 1 Standings </title>
		<link rel="stylesheet" type="text/css" a href="style.css"/>	
		<script type="text/javascript">

		</script>
	</head>
	<body>
		<div id="container" style="width:100%;height:100%;">
			<div id="header" style="Text-align:center;border-style:solid;border-color:black">
				<h1 style="margin-bottom:0;">Standings after round 1</h1>
			</div>
			
			<div id="content" style="height:50%;width:75%;float:left;">
				 
			<?php
			
			
			
				$Points=array();
				//$Points=$_SESSION['Points'];
				$GamesWon=array();
				$GamesLost=array();
				$MatchesWon=array();
				$Round1opp=array();
				$Round1=array();
				$Players=array();
				$Matchwin=array();
				$Breaker1=array();
				$Breaker2=array();
				$Standings=array();
				$Checked=array();

			$Players=$_SESSION['Players'];
			$numPlay=$_SESSION['numPlay'];
			
				
			$Round1=$_SESSION['Round1'];
			$Round1opp=$_SESSION['Round1opp'];
			$GamesWon=$_SESSION['GamesWon'];
			$GamesLost=$_SESSION['GamesLost'];
		//	$MatchesWon=$_SESSION['MatchesWon'];
			$count=$numPlay;
			
	

		
		
			//grabs the wins a player received
			for ($x = 1; $x <= $numPlay; $x++)
			{
		
			
				for ($y = 1; $y <= $numPlay; $y++)
				{
				
			
				//grab the games that player won
				if($Round1[$x]==$Players[$y])
				{

					if($x==1)
					{
					
					$games=$_POST['player1game'];
					$GamesWon[$y]=$games;
					}
					
					if($x==2)
					{
					
					$games=$_POST['player2game'];
					$GamesWon[$y]=$games;
					}
					
					if($x==3)
					{
					$games=$_POST['player3game'];
					$GamesWon[$y]=$games;
					}
					
					if($x==4)
					{
					$games=$_POST['player4game'];
					$GamesWon[$y]=$games;
					}
					
					if($x==5)
					{
					$games=$_POST['player5game'];
					$GamesWon[$y]=$games;
					}
					
					if($x==6)
					{
					$games=$_POST['player6game'];
					$GamesWon[$y]=$games;
					}
					
					if($x==7)
					{
					$games=$_POST['player7game'];
					$GamesWon[$y]=$games;
					}
					
					if($x==8)
					{
					$games=$_POST['player8game'];
					$GamesWon[$y]=$games;
					}
					
					if($x==9)
					{
					$games=$_POST['player9game'];
					$GamesWon[$y]=$games;
					}
					
					if($x==10)
					{
					$games=$_POST['player10game'];
					$GamesWon[$y]=$games;
					}
					if($x==11)
					{
					$games=$_POST['player11game'];
					$GamesWon[$y]=$games;
					}
					if($x==12)
					{
					$games=$_POST['player12game'];
					$GamesWon[$y]=$games;
					}
					if($x==13)
					{
					$games=$_POST['player13game'];
					$GamesWon[$y]=$games;
					}
					if($x==14)
					{
					$games=$_POST['player14game'];
					$GamesWon[$y]=$games;
					}
					if($x==15)
					{
					$games=$_POST['player15game'];
					$GamesWon[$y]=$games;
					}
					if($x==16)
					{
					$games=$_POST['player16game'];
					$GamesWon[$y]=$games;
					}
		
			
					
					
					$count=$x;
					if($x%2==1)
					$opp=$Round1[$x+1];
					else
					$opp=$Round1[$x-1];
					//grabs round one opponent

					
					//grabs games lost
					for ($t = 1; $t <= $numPlay; $t++)
					{
						if($opp==$Players[$t])
							{
					if($t==1)
					{
					$game=$_POST['player1game'];
					$Round1opp[$y]=$t;
					}
					if($t==2)
					{
					$game=$_POST['player2game'];
					$Round1opp[$y]=$t;
					}
					if($t==3)
					{
					$game=$_POST['player3game'];
					$Round1opp[$y]=$t;
					}
					
					if($t==4)
					{
					$game=$_POST['player4game'];
					$Round1opp[$y]=$t;
					}
					
					if($t==5)
					{
					
					$game=$_POST['player5game'];
					$Round1opp[$y]=$t;
					}
					if($t==6)
					{
					
					$game=$_POST['player6game'];
					$Round1opp[$y]=$t;
					}
					if($t==7)
					{
					$game=$_POST['player7game'];
					$Round1opp[$y]=$t;
					}
				
					if($t==8)
					{
					$game=$_POST['player8game'];
					$Round1opp[$y]=$t;
					}
					
					if($t==9)
					{
					$game=$_POST['player9game'];
					$Round1opp[$y]=$t;
					}
				
					if($t==10)
					{
					$game=$_POST['player10game'];
					$Round1opp[$y]=$t;
					}
					
					if($t==11)
					{
					$game=$_POST['player11game'];
					$Round1opp[$y]=$t;
					}
					
					if($t==12)
					{
					$game=$_POST['player12game'];
					$Round1opp[$y]=$t;
					}
					
					if($t==13)
					{
					$game=$_POST['player13game'];
					$Round1opp[$y]=$t;
					}
					
					if($t==14)
					{
					$game=$_POST['player14game'];
					$Round1opp[$y]=$t;
					}
					if($t==15)
					{
					$game=$_POST['player15game'];
					$Round1opp[$y]=$t;
					}
					if($t==16)
					{
					$game=$_POST['player16game'];
					$Round1opp[$y]=$t;
					}
					
					}
					$GamesLost[$y]=$GamesWon[$Round1opp[$y]];
				}
				
				}
				}
			}
			
		$_SESSION['GamesLost']=$GamesLost;
		$_SESSION['GamesWon']=$GamesWon;
		
		//calculate points earned
		for ($x = 1; $x <= $numPlay; $x++)
			{
			$opp=$Round1opp[$x];
			if($GamesWon[$x]==$GamesWon[$opp]){
			$Points[$x]=1;
			$MatchesWon[$x]=0;
			}	
			if($GamesWon[$x]>$GamesWon[$opp]){
			$Points[$x]=3;
			$MatchesWon[$x]=1;
			}
			if($GamesWon[$x]<$GamesWon[$opp]){
			$Points[$x]=0;
			$MatchesWon[$x]=0;
			}
			
			}
			//calculates tie breakers
			for ($x = 1; $x <= $numPlay; $x++)
			{
			
			$opp=$Round1opp[$x];
			if($opp!==0){
			$Breaker1[$x]=100*($Points[$opp]/3);
			$gamesplayed=$GamesWon[$x]+$GamesLost[$x];
			$Breaker2[$x]=100*(($GamesWon[$x]*3)/($gamesplayed*3));
			}
			}
			//calculates points and breakers if a player had a tie
			for ($x = 1; $x <= $numPlay; $x++)
			{
			if($Round1opp[$x]==0)
			{
			echo $Player[$x];
			$Points[$x]=3;
			$Breaker1[$x]=0;
			$Breaker2[$x]=0;
			$MatchesWon[$x]=1;
			}
			}

			//sorts players into standings based on point
			
			
			for ($t = 1; $t <= $numPlay; $t++)
			{ 
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
			$_SESSION['Breaker1']=$Breaker1;
			$_SESSION['Breaker2']=$Breaker2;
			$_SESSION['MatchesWon']=$MatchesWon;
			$_SESSION['Standings']=$Standings;
			$_SESSION['Points']=$Points;
			$_SESSION['Round1opp']=$Round1opp;
			
				
		
		//displays results
			for ($x = 1; $x <= $numPlay; $x++)
			{
	

			$place=$Standings[$x];
			$opp=$Round1opp[$place];
			echo(" Place:$x Name:$Players[$place]   Points: $Points[$place] Breaker1:$Breaker1[$place] Breaker2:$Breaker2[$place]");
			echo("<br/><br/><br/>");
			}
			

			
			
			?>
			
			</div>
			<div id="content" style="height:50%;width:40%;float:right;">
				
				<form action= "Round2.php" method="post">
					
					<input type= "submit" name="submit" value="Begin Round 2" />
				</form>
			</div>
		</div>
	</body>
</html>