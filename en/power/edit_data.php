<?php
session_start();
        $mysqli = new mysqli('localhost', 'dindinda_match', 'BoxopusAquafeed!1', 'dindinda_matchora');
	if ($mysqli->connect_error){
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	
	
	
	if (isset($_POST['submit'])){
    $id = $_POST['id'];
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
	$score = $_POST['score'];
	$fscores = $_POST['fscores'];
	
   $draws =$_POST['draws'];
	
	
	$correctscore =$_POST['correctscore'];
	$correctscoreprediction =$_POST['correctscoreprediction'];
	
	$vip =$_POST['vip'];
	$vipprediction =$_POST['vipprediction'];
	
	
	$twentyodds =$_POST['twentyodds'];
	$twentyoddsprediction =$_POST['twentyoddsprediction'];
	
	$htft =$_POST['htft'];
	$htftprediction =$_POST['htftprediction'];
	$winning =$_POST['winning'];
	
	
	
	
		
					
	$query= $mysqli->query(" UPDATE  `match` SET 
	game='$game', 
	featured='$featured',
	date='$date',
	league='$league',
	fulltimeprediction='$fulltimeprediction',
	score='$score',	
	1_5goals='$onepointfive',
	4_5goals='$fourpointfive',
	doublechance='$doublechance',
	doublechanceprediction='$doublechanceprediction',
	tipoftheday='$tipoftheday',
	tipofthedayprediction='$tipofthedayprediction',
	1_5odds='$onepointfiveodds',
	1_5oddsprediction='$onepointfiveoddsprediction',
	twoodds='$twoodds',
	twooddsprediction='$twooddsprediction',
	FS2='$FS2',
	FS2_result='$FS2_result',
	fiveodds='$fiveodds',
	fiveoddsprediction='$fiveoddsprediction',
	FS5='$FS5',
	FS5_result='$FS5_result',
	tenodds='$tenodds',
	tenoddsprediction='$tenoddsprediction',
	FS10='$FS10',
	FS10_result='$FS10_result',
	firsthalfdraws='$firsthalfdraws',
	firsthalfprediction='$firsthalfprediction',
	over_0_5_firsthalf='$over_0_5_firsthalf',
	under_1_5_firsthalf='$under_1_5_firsthalf',
	btts='$btts',
	bttsprediction='$bttsprediction',
	under2_5goals='$under2_5goals',
	over2_5goals='$over2_5goals',
	threeodds='$threeodds',
	threeoddsprediction='$threeoddsprediction',
	FS3='$FS3',
	FS3_result='$FS3_result',
	under3_5goals='$under3_5goals',
	over3_5goals='$over3_5goals',
	draws='$draws',
	accumulator='$accumulator',
	accumulatorprediction='$accumulatorprediction',
	tipcabal='$tipcabal',
	fscores='$fscores',
	correctscore='$correctscore',
	correctscoreprediction='$correctscoreprediction',
	vip='$vip',
	vipprediction='$vipprediction',
	twentyodds='$twentyodds',
	twentyoddsprediction='$twentyoddsprediction',
	htft='$htft',
	htftprediction='$htftprediction',
	winning ='$winning'
	WHERE match_id='$id'");
	}
	
	
	header("location: selectfootballleague.php");
	
	?>