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
  <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">
  <title>Welcome Sigbin</title>
</head>
<body>
	<h1>Sigbin Radio</h1>

	<div id="mainContainer">

		<div id="topContainer">

			<?php include('includes/navBarContainer.php');?>

			<div id="mainViewContainer">

				<div id="mainContent">