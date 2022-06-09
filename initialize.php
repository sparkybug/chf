<?php
if(!isset($_SESSION)) {
  session_start();
}

  include_once 'dbconnect.php';

$curl = curl_init();

$res = mysqli_query($con, "SELECT * FROM donate");
$row = mysqli_fetch_array($res);


$email = $row['email'];
$amount = $row['amount'];  //the amount in kobo. This value is actually NGN 300

// url to go to after payment
// $callback_url = 'http://localhost/Himm/thanks.php';
$callback_url = 'http://covenanthelpersfoundation.herokuapp.com/thanks.php';  

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'amount'=>$amount * 100,
    'email'=>$email,
    'callback_url' => $callback_url
  ]),
  CURLOPT_HTTPHEADER => [
    "authorization: Bearer sk_live_67a336294b0237a7fa547ad6934bb289e187856b", //replace this with your own test key
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

$tranx = json_decode($response, true);

if(!$tranx['status']){
  // there was an error from the API
  print_r('API returned error: ' . $tranx['message']);
}

// comment out this line if you want to redirect the user to the payment page
print_r($tranx);
// redirect to page so User can pay
// uncomment this line to allow the user redirect to the payment page
header('Location: ' . $tranx['data']['authorization_url']);
