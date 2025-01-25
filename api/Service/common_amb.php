<?php



$amb_agent = '44mx3'; //แก้ไขได้

$amb_clientname = 'AQUABET'; //แก้ไขได้

$amb_key = '58efa05c777a08d527e979aa424be6e0'; //แก้ไขได้

$amb_hash = "621379ef3ee4d8002289cd8d"; //แก้ไขได้

$amb_api_endpoint = 'https://topup-aquabet.askmebet.io'; //แก้ไขได้



function GetSignatureAMB($fields) 

{

	$signature = md5($fields);

	return $signature;

}

?>