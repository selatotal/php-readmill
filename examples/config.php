<?php
	session_start();

	// Error Reporting
	error_reporting(E_ALL ^ E_NOTICE);
	
	// Set your client key and secret
	$client_key = "YOUR-API-KEY-HERE";
	$client_secret = "YOUR-API-SECRET-HERE";
	$redirect_uri = "YOUR-API-URI-REDIRECT-HERE";
	
	// Load the Readmill API library
	$readmill = new ReadmillAPI($client_key,$client_secret);

	// If the link has been clicked, and we have a supplied code, use it to request a token
	if(array_key_exists("code",$_GET)){
		$token = $readmill->GetToken($_GET['code'],$redirect_uri);
		setcookie("readmill_test", $token);
	}

	if (!$token){
		if(array_key_exists("readmill_test",$_COOKIE)){
			$token = $_COOKIE['readmill_test'];
		}
	}
	
?>	

