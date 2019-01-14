<?php
	include("includes/config.php");

	if(isset($_SESSION['userLoggedIn'])) {
		$userLoggedIn = $_SESSION['userLoggedIn'];
	}
	else {
		header("Location: register.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" type="text/css" href="assets/css/index.css" >
  <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe" rel="stylesheet">
  <title>Welcome Sigbin</title>
</head>
<body>
	<h1>Sigbin Radio and spotify ng mga Pilipino</h1>
	<div id="nowPlayingBarContainer">
		<div id="nowPlayingBar">
		
		</div>
	</div>
</body>

</html>