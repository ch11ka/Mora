<div class="tableholder">
 <?php
	$mysqli = new mysqli('localhost', 'dindinda_match', 'BoxopusAquafeed!1', 'dindinda_matchora');
	if ($mysqli->connect_error){
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	$result = $mysqli->query ("SELECT match_id, score, league, game, threeoddsprediction, threeodds FROM `match` WHERE 3odds = 'yes' AND date = '$date'");
	
	$sure5 = $mysqli->query ("SELECT match_id, score, league, game, threeoddsprediction, threeodds, FS3 FROM `match` WHERE threeodds = 'yes' AND date = '$date' AND FS3= 'yes'");
	$sure5_1 = $mysqli->query ("SELECT match_id, score, league, game, threeoddsprediction, threeodds, SS3 FROM `match` WHERE threeodds = 'yes' AND date = '$date' AND SS3= 'yes'");
	
	
	$FS3 = $mysqli->query("SELECT FS3_result FROM `match` WHERE threeodds = 'yes' AND date= '$date'");
	$SS3 = $mysqli->query("SELECT SS3_result FROM `match` WHERE threeodds = 'yes' AND date= '$date'");
	
	
	
	
	// second table showing combined matches. FIRST SET= FS2
	
	echo "<table>
	<tr>
	<th>Match</th>
	
    <th>League</th>
	<th>Prediction</th>
    <th>Result</th>
	</tr>";
	
	while ($cow = $sure5->fetch_assoc()){
		echo "<tr>";
		echo "<td>" . $cow['game']. "</td>";
		
		echo "<td>" . $cow ['league'] . "</td>";
        echo "<td>" . $cow ['threeoddsprediction'] . "</td>";
		echo "<td>" . $cow ['score'] . "</td>";	
echo "</tr>";

			
	

//$sum_op = 1;
//$sum_op *=$vee;
//echo $vee;

}
echo "</table>";
// THird table showing total of odds multiplied
echo "<table>
	<tr>
	
	</tr>";
	
echo "<tr>";
echo "<tr>";
	echo "<td>" ."<strong>" . "TOTAL"."ODDS" . "</td>";
	while ($jow = $FS3->fetch_assoc()){
	echo "<td>" . $jow ['FS3_result']. "</td>";
	}
	echo "</tr>";
echo "</table>";

echo "<br>";
echo "<br>";
echo "<br>";

	
// FOURTH table showing second set of combined matches. SECOND SET= SS2
	
	/* echo "<table>
	<tr>
	<th>2nd Ticket</th>
    <th>League</th>
	<th>Prediction</th>
    <th>Result</th>
	</tr>";
	
	while ($cow = $sure5_1->fetch_assoc()){
		echo "<tr>";
		echo "<td>" . "<a href=\"../../matches/matches.php?id=$cow[match_id]\">$cow[game]</a>" . "</td>";
		echo "<td>" . $cow ['league'] . "</td>";
        echo "<td>" . $cow ['threeoddsrecommendation'] . "</td>";
        echo "<td>" . $cow ['score'] . "</td>";	
echo "</tr>";

//$sum_op = 1;
//$sum_op *=$vee;
//echo $vee;

}
echo "</table>";
// FIFTH table showing total of odds multiplied
echo "<table>
	<tr>
	
	</tr>";
	
echo "<tr>";
echo "<tr>";
	echo "<td>" ."<strong>" . "TOTAL"."ODDS" . "</td>";
	while ($jow = $SS3->fetch_assoc()){
	echo "<td>" . $jow ['SS3_result']. "</td>";
	}
	echo "</tr>";
echo "</table>"; */
     
?>
</div>