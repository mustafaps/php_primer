<?php 
	$title = "String Maniplution";
	include 'include/header.php';
?>
<h1><?php echo $title ?></h1>
    <?php
	$phrase1 = "student who came late";
	$phrase2 = "in class, stand with rock";
	$name = "Mustafa basher";
	echo $phrase1 . " ". $phrase2;
	echo '<br/>';
	//string transformation
	echo 'Uppercase First letter ' .ucfirst($name).'<br/>';
	echo "uppercase first letter of each word:" .ucwords($name).'<br/>';
	echo 'Upper Case : ' .strtoupper($name).'<br/>';
	echo 'Lower Case: ' .strtolower("ABC").'<br/>';
	echo '<hr/>';
	echo 'Repeat String:' . strtoupper(str_repeat('a',10)).'<br/>';
	echo 'Get a Subtring: ' . substr($name ,5,10).'<br/>';
    echo 'Get position of string : '. strpos($name,'u').'<br/>';
    echo 'find charater "h": ' . strchr($name , 'h').'<br/>';
    echo 'Find the lenght of string:'.strlen($name).'<br/>';
    echo 'without trim' ."A" . " B C D " . "E" . '<br/>';
    echo 'Trim spcaes on both sides: ' . "A" . trim(" B C D ")."E".'<br/>';
    echo 'Replace strings: ' .str_replace("Mustafa","Aya",$name),'<br/>';
    

	
?>


<?php require 'include/footer.php'; ?>