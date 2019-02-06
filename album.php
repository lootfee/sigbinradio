<?php include("includes/header.php"); 

if(isset($_GET['id'])) {
	$albumId = $_GET['id'];
}

else {
	header("Location: index.php");
}

$album = new Album($con, $albumId);
$artist = $album->getArtist();
#echo $album->getTitle() . "<br>";
#echo $artist->getName();
?>

<div class="entityInfo">

	<div class="leftSection">
		<img src="<?php echo $album->getArtworkPath() ;?>" alt="Album image">
	</div>

	<div class="rightSection">
		<h2><?php echo $album->getTitle(); ?></h2>
		<span><?php echo $artist->getName(); ?></span>	
		<p><?php echo $album->getNumberOfSongs(); ?> songs</p>
	</div>

</div>

<div class="trackListContainer">
	<ul class="trackList">
		
		<?php 
		$songIdArray = $album->getSongIds();

		$i = 1;
		foreach($songIdArray as $songId) {
			
			$albumSong = new Song($con, $songId);
			$albumArtist = $albumSong->getArtist();

			#echo $albumSong->getTitle();
			echo "<li class='trackListRow'>
					<div class='trackCount'>
						<img class='play' src='assets/icons/play.png'>
						<span class='trackNumber'>$i</span>
					</div>

					<div class='trackInfo'>
						<span class='trackName'>" . $albumSong->getTitle() . "</span>
						<span class='artistName'>" . $albumArtist->getName() . "</span>
					</div>

					<div class='trackOptions'>
						<img src='optionsButton' src='assets/icons/more.png'>
					</div>

					<div class='trackDuration'>
						<span class='duration'>" . $albumSong->getDuration() . "</span>
					</div>

					</li>";
			
					$i = $i + 1;
			}
		 ?>
		
	</ul>
</div>



<?php include("includes/footer.php"); ?>