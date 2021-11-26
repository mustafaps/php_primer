<?php 
$title = "Arrays";
include 'include/header.php'; 
?>
<h1><?php echo $title ?></h1>
	
	<?php
		$num = 3;
        $numbers = array(1,2,3,4,5,6,7,8,True,10,50,679,0,1,6.1,'a',2);
        echo $numbers[5];
        echo "<p>$numbers[$num]</p>";
        $count = count($numbers);
        echo "<p>$count</p>";
        echo "<br></br>";

        for($index = 0 ; $index < $count ; $index++){
            echo "<p>$numbers[$index]</p>";
        }

		
    ?>
<?php require 'include/footer.php'; ?>