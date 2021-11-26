	<?php 
		$title = "for loops";
		include 'include/header.php'; 
	
	?>
	<h1><?php echo $title ?></h1>
	
	<?php
		//for loops
		for($count = 0 ; $count <10 ; $count++){
			echo "<p>the count is :$count</p>";
			
		}
	?>
<?php require 'include/footer.php'; ?>