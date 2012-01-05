<?php 
	require_once("../src/ReadmillAPI.class.php");
	require_once("config.php");
?>
<!doctype html>
<html>
<head>
	<title>Readmill - User Info...</title>
</head>
<body>
<h1>Readmill - User Info...</h1>
<hr />
<?php 

	$readmill->SetAccessToken($token);
	
	// Perform a request to a authenticated-only resource
	$response = $readmill->GetPrivate("me", false, false);
	$me = json_decode($response);
	
?>
	<pre>
	<?php echo($response); ?>
	</pre>
</body>
</html>

