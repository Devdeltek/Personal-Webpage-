<!DOCTYPE html>

<?php include "$_SERVER[DOCUMENT_ROOT]/../components/page-top.php" ?>
<h1> Projects </h1>
<main>
	<section class = "project-holder">
		<?php
			$dirs = array_filter(glob('*'), 'is_dir');
			foreach ($dirs as $dir){
				echo "<article style=\"background-image: url(/projects/stat-tracker/thumbnail.jpg);\" class=\"project-card\">";
				echo "	<a href=/projects/".$dir.">".str_replace('-', ' ', $dir)."</a>";
				echo "	<p>".get_meta_tags($dir."/index.php")['desc']."</p>";
				echo "</article>";
			}
		?>
	</section>
</main>
<?php include "$_SERVER[DOCUMENT_ROOT]/../components/footer.php" ?>
