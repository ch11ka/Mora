<?php

$date= date("Y-m-d");


// output headers so that the file is downloaded rather than displayed
$filename = "Pro_users_" . date('Y-m-d') . ".csv";
header('Content-Type: text/csv; charset=utf-8');
header("Content-Disposition: attachment; filename=\"$filename\"");

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
fputcsv($output, array('name', 'email'));

// fetch the data

$mysqli = new mysqli('localhost', 'dindinda_match', 'BoxopusAquafeed!1', 'dindinda_matchora');
	if ($mysqli->connect_error){
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	
$row = $mysqli->query("SELECT name,email FROM users WHERE account='4' and expiry >= '$date'");

// loop over the rows, outputting them





while ($rows = mysqli_fetch_assoc($row))

{
    fputcsv($output, $rows);
}

fclose($fp);

?>




	
	
	