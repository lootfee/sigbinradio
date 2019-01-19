<?php include("includes/header.php"); 

if(isset($_GET['id'])) {
	$albumID = $_GET['id'];
}

else {
	header("Location:index.php");
}

$albumQuery = mysqli_query($con, "SELECT * FROM Albums WHERE id='$albumID'");
$album = mysqli_fetch_array($albumQuery);

$artistID = $album['artist'];

$artistQuery = mysqli_query($con, "SELECT * FROM Artists WHERE id='$artistID'");
$artist = mysqli_fetch_array($artistQuery);

echo $album['title'] . "<br>" .$artist['name'];
?>



<?php include("includes/footer.php"); ?>