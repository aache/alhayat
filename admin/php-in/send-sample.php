<?php
	// Account details
	$apiKey = urlencode('XvoxziAYq70-sRDsfaznt3UbHSuZwNOidGkAn3OT1P');
	
	// Message details
	$numbers = array(919082467823);//$_POST['numbers'];//array(919082467823);
	$sender = urlencode('TXTLCL');
	$message = 'Hello world';//rawurlencode($_POST['message']);
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	// Process your response here
	echo $response;
?>