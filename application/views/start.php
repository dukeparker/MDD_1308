<section>
	<?php
	
	//loop through json response items	
	foreach ($articles->results as $article){
	
		//error reporting turned off for this process because some objects have more than 1 photo
		error_reporting(0);

		echo "<div class='story'>";
			echo "<div class='photo'>";
				//pass image into an img tag
				echo "<img src='" . $article->media[0]->{"media-metadata"}[0]->url . "' />";
			echo "</div>";
			echo "<div class='story-text'>";
				//call the story headline
				echo "<h3>" . $article->title . "</h3>";
				//call the description
				echo "<p>" . $article->abstract . "</p>";
				//call the link to the full story
				echo "<p> <span class='btn btn-primary'><a href='" . $article->url .  "' target='_blank'>Read More</a></span> <span class='btn'><a href='#'>Like</a></span>" . $likes . "</p>";

			echo "</div>";
		echo "</div>";
		
		//setup database array
		$article_data = array(
			'id' => $article->id,
			'image' => $article->media[0]->{"media-metadata"}[0]->url,
			'body' => $article->abstract,
			'title' => $article->title,
			'link' => $article->url			
		);
		
		$this->db->insert('stories', $article_data);

	}
		
	var_dump($articles->results[0]);
	
	?>	
	
	<p><a href="<?php echo $paginate; ?>" class="btn btn-block">Load More Stories</a></p>

</section>