<div class="tableholder">
<h2 class="cattitle">
    
   Over 2.5 Goals
    </h2>     
	 <?php
	$mysqli = new mysqli('localhost', 'dindinda_match', 'BoxopusAquafeed!1', 'dindinda_matchora');
	if ($mysqli->connect_error){
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	
	
	$result = $mysqli->query ("SELECT match_id,score,league, game,time, betcode, odds_home, odds_draw, odds_away, over2_5goals FROM `match` WHERE over2_5goals = 'yes' AND date ='$date'");
	
	
	$row= mysqli_num_rows($result);
	if ($row<1){
		
		
			echo "<center>". "<span class=\"blink_me\">We're still working on this </span>". "</center>";
	}	
	else {
	
	echo "<table>
	<tr>
	
	<th>League</th>
	<th>Match</th>
	<th>Betcode</th>
	
	<th>Result</th>
    
	</tr>";
	//if ($result =mysqli_query ($con,$sql)){
		
	while ($pow = $result->fetch_assoc()){
		echo "<tr>";
	
		echo "<td>" .$pow ['league'] ."</td>";
		echo "<td>" .$pow ['game'] ."</td>";
		echo "<td>" . $pow ['betcode'] . "</td>";
		
		echo "<td>".  $pow['score']."</td>";
       
		echo "</tr>";
	}
	
	}
	echo "</table>";
	
	
	//$result->free();
	$mysqli->close();
	//mysqli_close($con);
	 ?>
          <br>
          <h2 class="cattitle">
    
   Under 2.5 Goals
    </h2>
          
          
          
    
           <?php
	$mysqli = new mysqli('localhost', 'dindinda_match', 'BoxopusAquafeed!1', 'dindinda_matchora');
	if ($mysqli->connect_error){
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	
	
	$result = $mysqli->query ("SELECT match_id,score,league, game,time, betcode, odds_home, odds_draw, odds_away, under2_5goals FROM `match` WHERE under2_5goals = 'yes' AND date ='$date'");
	
	
	$row= mysqli_num_rows($result);
	if ($row<1){
		
		
			echo "<center>". "<span class=\"blink_me\">We're still working on this </span>". "</center>";
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
		echo "<td>" .$pow ['game'] ."</td>";
	
		
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