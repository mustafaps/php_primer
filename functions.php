    <?php 
        $title = "Functions";
        include 'include/header.php'; 
    
    ?>
    <h1><?php echo $title ?></h1>
    <?php
            /*Defining a Functions */
        function writeMassage(){
            echo "A Function called";
        }
            /*Defining a Functions with parameters */
        function addfunction($num1,$num2){
            $sum = $num1 + $num2 ;
            echo "The sum of $num1 and $num2 is : $sum";
        }
        function changeNum(&$num){
            $num = $num +10;
        }
        function returnProduct($num1 ,$num2){
            $prod = $num1 * $num2 ;
            return $prod;
        }

        writeMassage();
        echo '<hr/>';
        writeMassage();
        echo '<hr/>';
        addfunction(2,3);
        echo '<hr/>';
        $w = 330;
        addfunction(100,$w);
        echo '<hr/>';
        changeNum($w);
        echo $w . '<br/>';
        echo '<hr/>';
        $return_value = returnProduct(20 , 0.5);
        echo $return_value . '<br/>';

    ?>
    
    <?php require 'include/footer.php'; ?>