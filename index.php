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
	<h1>Sigbin Radio</h1>
	<div id="nowPlayingBarContainer">
		<div id="nowPlayingBar">
			<div id="nowPlayingBarLeft">
			
			</div>
			
			<div id="nowPlayingBarCenter">
			
				<div class="content playerControls">
				
					<div class="playbackBar">
					
					<span class="progressTime current">0.00</span>
					
						<div class="progressBar">
							<div class="progressBarBg">
								<div class="progress"></div>
							</div>
						</div>
					
					<span class="progressTime remaining">0.00</span>
					
					</div>
					
					<div class="buttons">
					
						<button class="controlButton shuffle" title="shuffle"><img src="assets/icons/shuffle.png" alt="shuffle"></button>
						<button class="controlButton previous" title="previous"><img src="assets/icons/previous.png" alt="previous"></button>
						<button class="controlButton play" title="play"><img src="assets/icons/play.png" alt="play"></button>
						<button class="controlButton pause" title="pause" style="display: none;"><img src="assets/icons/pause.png" alt="pause"></button>
						<button class="controlButton next" title="next"><img src="assets/icons/next.png" alt="next"></button>
						<button class="controlButton repeat" title="repeat"><img src="assets/icons/repeat.png" alt="repeat"></button>
					
					</div>
				
				</div>
				
			</div>
			
			<div id="nowPlayingBarRight">
			
			</div>
		
		</div>
	</div>
</body>

</html>
