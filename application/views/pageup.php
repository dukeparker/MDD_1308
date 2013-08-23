
	<section>
	<?php
	
	$paginate = site_url('/pageup');


		foreach ($paginate->results as $pageup){
	
		error_reporting(0);

		echo "<div class='story'>";
			echo "<div class='photo'>";
				echo "<img src='" . $pageup->media[0]->{"media-metadata"}[0]->url . "' />";
			echo "</div>";
			echo "<div class='story-text'>";
				echo "<h3>" . $pageup->title . "</h3>";
				echo "<p>" . $pageup->abstract . "</p>";
				echo "<p class='btn btn-primary'><a href='" . $pageup->url .  "' target='_blank'>Read More</a></p>";
			echo "</div>";
		echo "</div>";
	}


	//var_dump($articles->results[0]);
	?>
	
	<p><a href="<?php echo $paginate; ?>" class="btn btn-block">Load More Stories</a></p>

	</section>
	
	<aside>
	</aside>