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
	<p><img src="<?php echo $me->avatar_url;?>" />
	<p>User: <?php echo $me->username; ?></p>
	<p>Name: <?php echo $me->fullname; ?></p>
	<p>City/Country: <?php echo $me->city.'/'.$me->country; ?></p>
	<p>Books Finished: <?php echo $me->books_finished; ?></p>
	<p>Books Abandoned: <?php echo $me->books_abandoned; ?></p>
	<p>Profile: <a href="<?php echo $me->permalink_url; ?>">Profile</a></p>
	<hr />
	<a href="index.php">Home</a>
		
</body>
</html>

