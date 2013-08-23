<?php

	$userinfo = $userInfo[0];
	$name = htmlspecialchars($userinfo['nickname']);
	$email = htmlspecialchars($userinfo['email']);
	$joined = htmlspecialchars($userinfo['joined']);

?>

<section>
	<h3>My Profile</h3>
	
	<div class="row">
		<div class="span4">
	
			<p><strong>Name:</strong> <?php echo $name; ?> </p>
			<p><strong>Email:</strong> <?php echo $email; ?></p>
			<p><strong>Member Since:</strong> <?php echo $joined; ?></p>
	
		</div> 
	</div> 
</section>

