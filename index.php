<?php include("includes/header.php"); ?>
					
	<div class="gridViewContainer">
		
		<?php 
			$albumQuery = mysqli_query($con, "SELECT * FROM Albums ORDER BY RAND() LIMIT 12");

			while($row = mysqli_fetch_array($albumQuery)) {
				

				echo "<div class='gridViewItems'>
					<a href='album.php?id=" . $row['id'] . "'>
					<img src='" . $row['artworkPath'] . "'>

					<div class='gridViewInfo'>" 

						. $row['title'] .

					"</div>

				</a>

				</div>";
			}
		 ?>

	</div>

<?php include("includes/footer.php"); ?>		