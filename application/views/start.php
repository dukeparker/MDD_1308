<?php
	
	$login = site_url('/auth');
	$join = site_url('/join');

?>

	<section>
	<?php
		
		echo "<p>" . $article . "</p>";
	
	?>

	</section>
	
	<aside>
		<p><a href="<?php echo $login; ?>" class="btn btn-primary btn-block">Sign In</a></p>
		<p><a href="<?php echo $join; ?>" class="btn btn-block">Join Up</a></p>
	</aside>