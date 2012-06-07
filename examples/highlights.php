<?php 
	require_once("../src/ReadmillAPI.class.php");
	require_once("config.php");
?>
<!doctype html>
<html>
<head>
	<title>Readmill - Highlights...</title>
</head>
<body>
<h1>Readmill - Highlights...</h1>
<hr />
<?php 

	$readmill->SetAccessToken($token);
	
	// Perform a request to a authenticated-only resource
	if ($_GET['idReading']){
		$response = $readmill->GetPrivate("readings/".$_GET['idReading']."/highlights", false, false);
	} else {
		$response = $readmill->GetPrivate("highlights", false, false);
	}
	$highlights = json_decode($response);
	
?>
	<table border="1">
	<tr>
		<th>Highlight</th><th>Link</th>
		<?php
		foreach ($highlights as $highlight){
		?>
			<tr>
		<?php
			echo '<td>'.$highlight->content.'</td>';
			echo '<td><a href="'.$highlight->permalink_url.'">Link</a></td>';
		?>
			</tr>
		<?php
		}
		?>
	</tr>
	</table>
</body>
</html>

