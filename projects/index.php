<!DOCTYPE html>

<?php include "../components/header.php" ?>
<h1> Projects </h1>
<?php
	$dirs = array_filter(glob('*'), 'is_dir');
	foreach ($dirs as $dir){
		print($dir);
		echo "<img src=/projects/".$dir."/thumbnail.jpg>";
		echo "<a href=/projects/".$dir.">".str_replace('-', ' ', $dir)."</a>";
		echo "<p>".get_meta_tags($dir."/index.php")['desc']."</p>";
	}
?>
<?php include "../components/footer.php" ?>
