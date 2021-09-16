<?php 
$title ='Arrays';
include 'includes/header.php'?>
    <h1>ARRAYS</h1>
    <?php
    // array
    $numbers = array(1,2,3,4,5,6,7,8,9,55,74,46,22,45,65,26,874);
     echo $numbers[5];

    $size = count($numbers);
    echo "<p>$size</p>";

    for ($c = 0; $c < $size; $c++){
        echo "<p>ARRAYS are: $numbers[$c]</p>";
    }
    ?>
<?php
$name1 = " my name is: ";
$name2 = " my age is 22";
echo $name1 ,"Momin Zaid, ", $name2;
echo '<br/>';
$n = "Mohammed ZaidBoss";
echo 'The name will printed in Upper letters:'. strtoupper($n) .'<br/>';
echo 'The name will printed in lower letters:'. strtolower($n).'<br/>';
echo 'The first letter will printed in Upper letters:'. ucfirst($n).'<br/>';
echo 'The first word will printed in Upper letters:'. ucwords($n).'<br/>';
echo "Repeater". str_repeat('5',5). '<br/>';
echo "Repeater" .strtoupper (str_repeat('A',5)).'<br/>';

?>
<hr></hr>
<?php 
require 'includes/footer.php'
?>