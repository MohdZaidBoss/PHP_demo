<?php 
$title ='Do While Statement';
include 'includes/header.php'?>
    <h1>THIS IS WHILE LOOP</h1>
<?php
    //   pre condtion loop
    $C = 0;
    while($c < 10){
        echo '<p>This is while loop</p>'; // if we dont add inc it becomes infinite loop
        $c++; // incrementing
    }
    echo 'EXITED LOOP';
?>
    <h1>THIS IS DO WHILE LOOP </h1>
<?php 
    //   post condition loop
    $c = 0;
    do{
        echo '<p>This is do while loop</p>';
        $c++;
    }while($c < 10);
    echo 'EXITED LOOP';
    
    ?>
    <hr></hr>
<?php 
require 'includes/footer.php'
?>