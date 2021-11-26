    <?php
        $title = "If statment";
        include 'include/header.php'; 
    ?>
<h1><?php echo $title ?></h1>
    <?php
        echo '<h2>if statement</h2>';
        $grade = 30 ;
        if($grade >= 50){
            echo '<h3 style="color: Green">You have Passed</h3>';
        }
        else{
            echo '<h3 style="color: red">you have failed</h3>';
        }
        $letter_grade = 'E';
        if($letter_grade == 'A'|| 1){
            echo '<h2 style="color:Blue">You are a superstar!</h2>';
        }
        elseif($letter_grade == 'B'){
            echo '<h2 style="color:Green">Good Job!</h2>';
        }
        else{
            echo '<h2 style="color:Red">You Have Failed!</h2>';
        }

    ?>
<?php require 'include/footer.php'; ?>