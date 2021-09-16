<?php 
$title ='User Defined Function';
include 'includes/header.php'?>
    <?php 
    
    // defining a fumction
    function message(){
        echo 'This is a message to yall have a nice day :)';
    }
    // calling a function
    message(); 
    echo '<br/>';

function addfunc($num1, $num2){
    $sum = $num1 + $num2;
    echo "The sum of $num1 and $num2 is: $sum";
}

addfunc(2,5);
echo '<br/>';
addfunc('10','20');
echo '<br/>';

    function changenum($num){
        $num += 10;
        echo $num;
    }
    $num = 500;
    changenum($num);
    echo '<br/>';
    echo "The value of num: $num".'<br/>';
    ?>


<?php 
 function product($num1, $num2){
     $prod = $num1 + $num2;
     return $prod;
 }

 $return = product(25, 25);
 echo "The returned value is: $return";
?>
<hr></hr>
<?php 
require 'includes/footer.php'
?>