<?php 
	require_once("../src/ReadmillAPI.class.php");
	require_once("config.php");
?>
<!doctype html>
<html>
<head>
	<title>Readmill - Readings...</title>
</head>
<body>
<h1>Readmill - Readings...</h1>
<hr />
<?php 

	$readmill->SetAccessToken($token);
	
	// Perform a request to a authenticated-only resource
	$response = $readmill->GetPrivate("readings", false, false);
	$me = json_decode($response);
	
?>
	<pre>
	<?php echo($response); ?>
	</pre>
</body>
</html>

