<?php include("includes/header.php"); 
	if(isset($_GET['id'])) {
		$albumId = $_GET['id'];
	}
	else {
		header("Location: index.php");
	}
	

	$album = new Album($con, $albumId);

	$artist = $album->getArtist();


	echo $album->getTitle() . "<br>";
	echo $artist->getName();
?>


<div class="entityInfo">
	
	<div class="leftSection">
		
		 <img src="<?php echo $album->getArtworkPath(); ?>">

	</div>

	<div class="rightSection">
		
		<h2><?php echo $album->getTitle(); ?></h2>
		<span>By <?php echo $artist->getName(); ?></span>

	</div>

</div>
<?php include("includes/footer.php"); ?>