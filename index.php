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
		
			<div id="navBarContainer">
				<nav class="navBar">
					<a href="index.php" class="logo" ><img src="assets/images/logo2.png"></a>
					
					<div class="group">
						<div class="navItem">
							<a class="navItemLink" href="search.php">Search
							<img src="assets/images/search_icon2.png" class="icon" alt="Search"></a>
						</div>
					</div>
					
					<div class="group">
						<div class="navItem">
							<a class="navItemLink" href="browse.php">Browse</a>
						</div>
						<div class="navItem">
							<a class="navItemLink" href="yourMusic.php">Your Music</a>
						</div>
						<div class="navItem">
							<a class="navItemLink" href="profile.php">TEST SIGBIN</a>
						</div>
					</div>
					
				</nav>
			
			</div>
		
		</div>
	
		<div id="nowPlayingBarContainer">
			<div id="nowPlayingBar">
				<div id="nowPlayingBarLeft">
					<div class="content">
						<span class="albumLink"><img class="albumArtwork" src=data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAKlBMVEX///8AAABpaWmJiYlsbGx9fX319fWYmJhlZWVDQ0ONjY2EhISBgYH7+/s5oZO0AAABPklEQVR4nO3P2RGCUAAEwSeo4JV/uobAB0UtS/VEMD2Wdbp2Y7pdvHFPHxwdYX+E/RH2R9gfYX+E/RH2R9gfYX+E/RH2R9gfYX+E/W0JX+/55H12Cr/j7P12Ch9pwGZPQsI0YDNCQsJ8hISE+QgJCfMREhLmIyQkzEdISJiPkJAwHyEhYT5CQsJ8hISE+QgJCfMREhLmIyQkzEdISJiPkJAwHyEhYT5CQsJ8hISE+QgJCfMREhLmIyQkzEdISJiPkJAwHyEhYT5CQsJ8hISE+QgJCfMREhLmIyQkzEdISJiPkJAwHyEhYT5CQsJ8hISE+QgJCfMREhLmIyQkzEdISJiPkPD6wm8asNlvp/D1nk/eZ6ewP8L+CPsj7I+wP8L+CPsj7I+wP8L+CPsj7I+wP8L+CPsbU/rg6MayTtfuD6N2bW3PI3z1AAAAAElFTkSuQmCC></span>
					
					
						<div class="trackInfo">
						
							<span class="trackName">
								<span>Original Sigbin</span></span>
								
							<span class="artistName">
								<span>Junior Kilat</span></span>
						
						</div>
					</div>
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
					<div class="volumeBar">
						<button class="controlButton volume" title="Volume">
							<img src="assets/icons/volume.png" alt="Volume">
						</button>
						
						<div class="progressBar">
							<div class="progressBarBg">
								<div class="progress"></div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	
	</div>
	
	
	
</body>

</html>