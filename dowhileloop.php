	<?php 
	$title = 'Do-while';
	include 'include/header.php'; 
	?>
	<h1><?php echo $title ?></h1>
    <?php
		$grade = 0;
		while($grade < 10){
			echo '<p>I Am Less than Ten</p>';
			$grade++;
		}
	?>
	<h1>do-while loop</h1>
	<?php
		$grade = 0;
		do{
			echo '<p>I am do while loop</p>';
			$grade++;
		}while($grade < 10)
	?>

	
<?php require 'include/footer.php'; ?>