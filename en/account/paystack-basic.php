<?php 
ob_start();
ini_set('session.gc_maxlifetime', 3600);	//keep session active for 1 hour		
session_start();

if (isset($_POST['submit'])){
    $amount = 200000;
 $transref= $_SESSION['transref'];
$email = trim ($_SESSION['email']);
}
$_SESSION['amount']=$amount;

if(!isset($_SESSION['logged_in'])){
	header('Location: ../login/index.php');
}

$user_id = $_SESSION['user_id'];





$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'amount'=>$amount,
    'email'=>$email,
	
	
  ]),
  CURLOPT_HTTPHEADER => [
    "authorization: Bearer sk_live_25cd93fd3a517f77098cb51f8a27c8cb948402ac",
    "content-type: application/json",
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

// store transaction reference so we can query in case user never comes back
// perhaps due to network issue


// redirect to page so User can pay
header('Location: ' . $tranx->data->authorization_url);
?>