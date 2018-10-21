<?php
session_start();
 $transref= $_SESSION['transref'];
 $email =$_SESSION ['email'];    

$date= date("Y-m-d");
 
   $dat = date_create ("now");
 date_add ($dat, date_interval_create_from_date_string("30 days"));
 $updatepremiumonemonth = date_format($dat, "Y-m-d");
 
 
  $dat1 = date_create ("now");
 date_add ($dat1, date_interval_create_from_date_string("7 days"));
 $updatepremiumweekly = date_format($dat1, "Y-m-d");
 
 $dat11 = date_create ("now");
 date_add ($dat11, date_interval_create_from_date_string("60 days"));
 $updatepremiumtwomonth = date_format($dat11, "Y-m-d");

  $dat2 = date_create ("now");
 date_add ($dat2, date_interval_create_from_date_string("90 days"));
 $updatepremiumthreemonth = date_format($dat2, "Y-m-d");
 
 
  $dat3 = date_create ("now");
 date_add ($dat3, date_interval_create_from_date_string("180 days"));
 $updatepremiumsixmonth = date_format($dat3, "Y-m-d");
 
  $dat4 = date_create ("now");
 date_add ($dat4, date_interval_create_from_date_string("365 days"));
 $updatepremiumoneyear = date_format($dat4, "Y-m-d");
 
 
  $dat5 = date_create ("now");
 date_add ($dat5, date_interval_create_from_date_string("7 days"));
 $updatebasicweekly = date_format($dat5, "Y-m-d");
 
  $dat6 = date_create ("now");
 date_add ($dat6, date_interval_create_from_date_string("30 days"));
 $updatebasiconemonth = date_format($dat6, "Y-m-d");
 
  $dat7 = date_create ("now");
 date_add ($dat7, date_interval_create_from_date_string("90 days"));
 $updatebasicthreemonth = date_format($dat7, "Y-m-d");
 
 
  $dat8 = date_create ("now");
 date_add ($dat8, date_interval_create_from_date_string("180 days"));
 $updatebasicsixmonth = date_format($dat8, "Y-m-d");
 
 
  $dat9 = date_create ("now");
 date_add ($dat9, date_interval_create_from_date_string("365 days"));
 $updatebasiconeyear = date_format($dat9, "Y-m-d"); 
 
 $dat10 = date_create ("now");
 date_add ($dat10, date_interval_create_from_date_string("5 days"));
 $updatefivedays = date_format($dat10, "Y-m-d");

$curl = curl_init();
$reference = isset($_GET['reference']) ? $_GET['reference'] : '';
if(!$reference){
  die('No reference supplied');
}

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => [
    "accept: application/json",
    "authorization: Bearer sk_live_25cd93fd3a517f77098cb51f8a27c8cb948402ac",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
	// there was an error contacting the Paystack API
  die('Curl returned error: ' . $err);
}

$tranx = json_decode($response);


if(!$tranx->status){
  // there was an error from the API
  die('API returned error: ' . $tranx->message);
}

$message = 'Thank you for your attempted payment.<br /><br />'.'</br>'.'Transaction Reference ID:    '.$reference;

echo $message;
	
	
	if('success' == $tranx->data->status and '200000'== $tranx->data->amount ){ 


	 
			$mysqli = new mysqli('localhost', 'dindinda_match', 'BoxopusAquafeed!1', 'dindinda_matchora');
	if ($mysqli->connect_error){
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	$result = $mysqli->query ("UPDATE users SET account ='2', expiry ='$updatepremiumonemonth', LPaymentDate='$date'  WHERE email ='$email'");
	 }
	 
	 
	 
	 else if('success' == $tranx->data->status and '300000'== $tranx->data->amount ){ 


	 
			$mysqli = new mysqli('localhost', 'dindinda_match', 'BoxopusAquafeed!1', 'dindinda_matchora');
	if ($mysqli->connect_error){
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	$result = $mysqli->query ("UPDATE users SET account ='3', expiry ='$updatepremiumonemonth', LPaymentDate='$date'  WHERE email ='$email'");
	 }
	 
	 
	 else if('success' == $tranx->data->status and '500000'== $tranx->data->amount ){ 


	 
			$mysqli = new mysqli('localhost', 'dindinda_match', 'BoxopusAquafeed!1', 'dindinda_matchora');
	if ($mysqli->connect_error){
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	$result = $mysqli->query ("UPDATE users SET account ='4', expiry ='$updatepremiumonemonth', LPaymentDate='$date'  WHERE email ='$email'");
	 }
	 
	 
	 else if('success' == $tranx->data->status and '2000000'== $tranx->data->amount ){ 


	 
			$mysqli = new mysqli('localhost', 'dindinda_match', 'BoxopusAquafeed!1', 'dindinda_matchora');
	if ($mysqli->connect_error){
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	$result = $mysqli->query ("UPDATE users SET accountvip ='2', expiryvip ='$updatepremiumonemonth', LPaymentDate='$date'  WHERE email ='$email'");
	 }
	 
	 
	 else if('success' == $tranx->data->status and '700000'== $tranx->data->amount ){ 


	 
			$mysqli = new mysqli('localhost', 'dindinda_match', 'BoxopusAquafeed!1', 'dindinda_matchora');
	if ($mysqli->connect_error){
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	$result = $mysqli->query ("UPDATE users SET accounttwenty ='2', expirytwenty ='$updatefivedays', LPaymentDate='$date'  WHERE email ='$email'");
	 }
?>


<p class="text-center">
								
                            	<a class="btn btn-warning btn-md text-center" href="https://matchora.com/account/dashboard" type="submit" name="submit" style="margin-top: -10px;margin-bottom: 20px;">CLICK TO RETURN </a></p>