<?php 
	$title = "Switch Statments";
	include 'include/header.php';
?>
<h1><?php echo $title ?></h1>
    <?php
        $grade ='A';
        switch($grade){
            case 'A':
                echo '<h2 style="color:Blue">Excellent</h2>';
                break;
            case 'B':
                echo '<h2 style="color:Green">Good Job!</h2>';
                break;
            default:
                echo '<h2 style="color:Red">You Have Failed..!</h2>';
                break;
        }
    ?>
<?php require 'include/footer.php'; ?>