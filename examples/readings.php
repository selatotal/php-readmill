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
	
	// Get current User
	$response = $readmill->GetPrivate("me", false, false);
	$me = json_decode($response);

	// Get readings from current user
	$response = $readmill->GetPrivate("/users/".$me->id."/readings", false, false);
	$readings = json_decode($response);
	
?>
	<table>
	<tr>
		<th>Book</th><th>Duration</th><th>No. Highlights</th><th>Highlights</th>
	</tr>
	<?php 
		foreach ($readings as $read){
	?>
	<tr>
	<?php
			echo '<td>'.$read->book->title.'</td>';
			echo '<td>'.$read->duration.'</td>';
			echo '<td><a href="highlights.php?idReading='.$read->id.'">';
			echo $read->highlights_count;
			echo '</a></td>';
			echo '<td>'.$read->highlights.'</td>';
	?>
	</tr>
	<?php
		}
	
	?>
	</table>
	<hr />
	<a href="index.php">Home</a>
</body>
</html>

