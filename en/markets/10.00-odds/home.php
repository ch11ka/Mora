<div class="tableholder">
 <?php
	$mysqli = new mysqli('localhost', 'dindinda_match', 'BoxopusAquafeed!1', 'dindinda_matchora');
	if ($mysqli->connect_error){
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	$result = $mysqli->query ("SELECT match_id, score, league, game, tenoddsprediction, tenodds FROM `match` WHERE tenodds = 'yes' AND date = '$date'");
	
	$sure10 = $mysqli->query ("SELECT match_id, score, league, game, tenoddsprediction, tenodds, FS10 FROM `match` WHERE tenodds = 'yes' AND date = '$date' AND FS10= 'yes'");
	$sure10_1 = $mysqli->query ("SELECT match_id, score, league, game, tenoddsprediction, tenodds, SS10 FROM `match` WHERE tenodds = 'yes' AND date = '$date' AND SS10= 'yes'");
	
	
	$FS2 = $mysqli->query("SELECT FS10_result FROM `match` WHERE tenodds = 'yes' AND date= '$date'");
	$SS2 = $mysqli->query("SELECT SS10_result FROM `match` WHERE tenodds = 'yes' AND date= '$date'");
	
	
	
	
	// second table showing combined matches. FIRST SET= FS2
	
	echo "<table>
	<tr>
	<th>Match</th>
	<th></th>
    <th>league</th>
	<th>Prediction</th>
    <th>Result</th>
	</tr>";
	
	while ($cow = $sure10->fetch_assoc()){
		echo "<tr>";
		echo "<td>" . $cow['game']. "</td>";
		echo "<td>" . "<a class=\"stat-icon\" href=\" ../../matches/matches.php?id=$cow[match_id]\"></a>". "</td>";echo "<td>" . $cow ['league'] . "</td>";
		echo "<td>" . $cow ['tenoddsprediction'] . "</td>";
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
	while ($jow = $FS2->fetch_assoc()){
	echo "<td>" . $jow ['FS10_result']. "</td>";
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
    <th>league</th>
	<th>Prediction</th>
    <th>Result</th>
	</tr>";
	
	while ($cow = $sure10_1->fetch_assoc()){
		echo "<tr>";
		echo "<td>" . "<a href=\"../../matches/matches.php?id=$cow[match_id]\">$cow[game]</a>" . "</td>";
        echo "<td>" . $cow ['league'] . "</td>";
		echo "<td>" . $cow ['10oddsrecommendation'] . "</td>";
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
	while ($jow = $SS2->fetch_assoc()){
	echo "<td>" . $jow ['SS10_result']. "</td>";
	}
	echo "</tr>";
echo "</table>"; */
     
?>
</div>