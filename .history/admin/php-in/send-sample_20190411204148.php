<?php
	// Account details
	$apiKey = urlencode('XvoxziAYq70-274NhCzAjOIiOPfBwL1VtQCL9xJi3Q');
	
	// Message details
	$numbers = $_POST['numbers'];//array(919082467823);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode('We Thank you for visiting AL HAYAT HOSPITAL');
 
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