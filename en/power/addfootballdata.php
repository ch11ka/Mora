<?php
session_start();
$mysqli = new mysqli('localhost','dindinda_match','BoxopusAquafeed!1','dindinda_matchora');
	if ($mysqli->connect_error){
		die('Error: ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
	}
	
if (isset($_POST['submit'])){
	$game= $_POST['game'];
	$featured = $_POST['featured'];   
   $tipcabal = $_POST['tipcabal'];
	
	$date = $_POST['date'];
    
	$league = $_POST['league'];
    $fulltimeprediction =$_POST['fulltimeprediction'];
	$onepointfive =$_POST['onepointfivegoals'];
	$fourpointfive =$_POST['fourpointfivegoals'];
	$doublechance =$_POST['doublechance'];
	$doublechanceprediction =$_POST['doublechanceprediction'];
	$tipoftheday =$_POST['tipoftheday'];
	$tipofthedayprediction =$_POST['tipofthedayprediction'];
	$onepointfiveodds =$_POST['onepointfiveodds'];
	$onepointfiveoddsprediction =$_POST['onepointfiveoddsprediction'];
	
	$twoodds =$_POST['twoodds'];
	$twooddsprediction =$_POST['twooddsprediction'];
	$FS2 = $_POST['FS2'];	
	$FS2_result = $_POST['FS2_result'];	
	
	$fiveodds =$_POST['fiveodds'];
	$fiveoddsprediction =$_POST['fiveoddsprediction'];
	$FS5 = $_POST['FS5'];	
	$FS5_result = $_POST['FS5_result'];	
	
	$tenodds =$_POST['tenodds'];
	$tenoddsprediction =$_POST['tenoddsprediction'];
	$FS10 = $_POST['FS10'];	
	$FS10_result = $_POST['FS10_result'];	
	
	$over_0_5_firsthalf = $_POST['over_0_5_firsthalf'];
	$under_1_5_firsthalf = $_POST['under_1_5_firsthalf'];
	
	$btts = $_POST['btts'];
	$bttsprediction = $_POST['bttsprediction'];
	
	
	$under2_5goals = $_POST['under2_5goals'];
	$over2_5goals = $_POST['over2_5goals'];
		
	$threeodds =$_POST['threeodds'];
	$threeoddsprediction =$_POST['threeoddsprediction'];
	$FS3 = $_POST['FS3'];	
	$FS3_result = $_POST['FS3_result'];	
	
	$over3_5goals = $_POST['over3_5goals'];
	$under3_5goals = $_POST['under3_5goals'];
	
	$firsthalfdraws =$_POST['firsthalfdraws'];
	$firsthalfprediction =$_POST['firsthalfprediction'];
	
	$accumulator =$_POST['accumulator'];
	$accumulatorprediction =$_POST['accumulatorprediction'];
	
	$draws =$_POST['draws'];
	
	
	$correctscore =$_POST['correctscore'];
	$correctscoreprediction =$_POST['correctscoreprediction'];
	
	$vip =$_POST['vip'];
	$vipprediction =$_POST['vipprediction'];
	
	
	$twentyodds =$_POST['twentyodds'];
	$twentyoddsprediction =$_POST['twentyoddsprediction'];
	
	$htft =$_POST['htft'];
	$htftprediction =$_POST['htftprediction'];
	
	
    
	
	if ($game !='' || $league!=''){
		$query =$mysqli->query ("INSERT INTO `match`(match_id, 
		 game,
		 featured,
		 date,
		 league,
		 fulltimeprediction,
		 tipcabal,
		 1_5goals,
		 4_5goals,
		 doublechance,
		 doublechanceprediction,
		 tipoftheday,
		 tipofthedayprediction,
		 1_5odds,
		 1_5oddsprediction,
		 twoodds,
		 twooddsprediction,
		 FS2, 
		 FS2_result,
		 fiveodds,
		 fiveoddsprediction,
		 FS5,
		 FS5_result,
		 tenodds,
		 tenoddsprediction,
		 FS10,
		 FS10_result,
		 over_0_5_firsthalf,
		 under_1_5_firsthalf,
		 btts,
		 bttsprediction,
		 under2_5goals,
		 over2_5goals,
		 threeodds,
		 threeoddsprediction,
		 FS3, 
		 FS3_result,
		 over3_5goals,
		 under3_5goals,
		 firsthalfdraws,
		 firsthalfprediction,
		 accumulator,
		 accumulatorprediction,
		 draws,
		 correctscore,
		 correctscoreprediction,
		 htft,
		 htftprediction,
		 vip,
		 vipprediction,
		 twentyodds,
		 twentyoddsprediction) 
		 
		 VALUES 
		 (NULL,
		 '$game',
		 '$featured',
		 '$date',
		 '$league',
		 '$fulltimeprediction',
		 '$tipcabal',		 
		 '$onepointfive',
		 '$fourpointfive',
		 '$doublechance',
		 '$doublechanceprediction',
		 '$tipoftheday',
		 '$tipofthedayprediction',
		 '$onepointfiveodds',
		 '$onepointfiveoddsprediction',
		 '$twoodds',
		 '$twooddsprediction',
		 '$FS2',
		 '$FS2_result',
		 '$fiveodds',
		 '$fiveoddsprediction',
		 '$FS5',
		 '$FS5_result',
		 '$tenodds',
		 '$tenoddsprediction',
		 '$FS10',
		 '$FS10_result',
		 '$over_0_5_firsthalf',
		 '$under_1_5_firsthalf',
		 '$btts',
		 '$bttsprediction',
		 '$under2_5goals',
		 '$over2_5goals',
		 '$threeodds',
		 '$threeoddsprediction',
		 '$FS3',
		 '$FS3_result',
		 '$over3_5goals',
		 '$under3_5goals',
		 '$firsthalfdraws',
		 '$firsthalfprediction',
		 '$accumulator',
		 '$accumulatorprediction',
		 '$draws',
		 '$correctscore',
		 '$correctscoreprediction',
		 '$htft',
		 '$htftprediction',
		 '$vip',
		 '$vipprediction',
		 '$twentyodds',
		 '$twentyoddsprediction')");
		
		echo "<br/><br/><span> Data Inserted...!!</span>";
	}
	else{
		echo "<p> Insertion Failed <br/> Some Fields are Blank ....!!</p>";
	}
}
echo "<br />";

 echo "<a href=\"addfootball.php\"> Add Match </a>";
header("location: addfootball.php");


?>