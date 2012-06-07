<?php 
	require_once("../src/ReadmillAPI.class.php");
	require_once("config.php");
	
?>
<!doctype html>
<html>
<head>
<title>Readmill API</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
</head>
<body>
<h1>Autentication</h1>
<p>
<?php 
	// If we have not received a token, display the link for Readmill webauth
	if(!isset($token)){ 
		echo "<a href='".$readmill->AuthenticationLink($redirect_uri, true)."'>Connect to this app via Readmill</a></p>";
	// Otherwise display the token
	}else{
		echo "You're already authenticated!</p>";
?>
<hr />
	<a href='current_user.php'>Current User</a><br>
	<a href='readings.php'>User's Readings</a><br>
	<a href='highlights.php'>Last Highlights</a><br>
	<a href='logout.php'>Logout</a><br>
<?php
	}
?>
<hr />
</body>
</html>

