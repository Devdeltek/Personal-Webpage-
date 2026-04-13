<!DOCTYPE html>

<?php include "$_SERVER[DOCUMENT_ROOT]/../components/page-top.php" ?>
<main>
	<h1>Projects</h1>
	<section>
		<?php
			$dirs = array_filter(glob('*'), 'is_dir');
			foreach ($dirs as $dir){
				echo "<article class=\"project-card\">";
				echo "	<a href=/projects/".$dir.">".get_meta_tags($dir."/index.php")['title']."</a>";
				echo "	<p>".get_meta_tags($dir."/index.php")['desc']."</p>";
				echo "	<small>".get_meta_tags($dir."/index.php")['date']."</small>";
				echo "</article>";
			}
		?>
	</section>
</main>
<?php include "$_SERVER[DOCUMENT_ROOT]/../components/footer.php" ?>
