<?php 
$title ='Switch statement';
include 'includes/header.php'?>
    <?php
    $grade = 'A';
    switch($grade) {
        case 'A': 
            echo '<h3 style = "color : green">You are the real chad</h3>';
            break;
        case 'B':
            echo '<h3 style = "color : blue">You did well bro</h3>';
            break;
        case 'C':
            echo  '<hr style = "color :red">man atleast you tried</h3>';   
            break; 
        default:
            echo '<h3>you nig..</h3>';
    }
?>
<hr></hr>
<?php 
require 'includes/footer.php'
?>
