    <?php 
        $title = "index" ;
        include 'include/header.php'; 
    ?>
    
    <!-- Basic HTML -->
    <h1><?php echo $title ?></h1>
    
    <?php
        //Printing to HTML using echo
        echo "hello php";
        echo '<br/>';
        echo 'second line';
        echo '<br/>';

        $name = 'Mustafa Basher';
        echo $name ;
        $age = 29;

        echo '<h3>My name is: '.$name.' </h3>';
        echo '<h4>My age is: '.$age.' </h4>';
        echo "<h1>My name is : $name </h1>"

    ?>
    <button type="button" class="btn btn-dark">Click Me</button>
<?php require 'include/footer.php'; ?>