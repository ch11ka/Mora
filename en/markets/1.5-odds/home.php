 <div class="tableholder">
<?php
	$mysqli = new mysqli('localhost', 'dindinda_match', 'BoxopusAquafeed!1', 'dindinda_matchora');
	if ($mysqli->connect_error){
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	
	
	$result = $mysqli->query ("SELECT match_id,score,league, game,time, betcode, odds_home, odds_draw, odds_away, 1_5odds, 1_5oddsprediction FROM `match` WHERE 1_5odds = 'yes' AND date ='$date'");
	
	
	$row= mysqli_num_rows($result);
	if ($row<1){
		
		
			echo "<span class=\"blink_me\">We are cooking this...</span>";
	}	
	else {
	
	echo "<table>
	<tr>
	
	<th>League</th>
	<th>Match</th>
	
	
	<th>Result</th>
    
	</tr>";
	//if ($result =mysqli_query ($con,$sql)){
		
	while ($pow = $result->fetch_assoc()){
		echo "<tr>";
	
		echo "<td>" .$pow ['league'] ."</td>";
		echo "<td>" . $pow ['game'] .  "</td>";
		
		echo "<td>".  $pow['score']."</td>";
       
		echo "</tr>";
	}
	
	}
	echo "</table>";
	
	
	//$result->free();
	$mysqli->close();
	//mysqli_close($con);
	 ?>
	 </div>