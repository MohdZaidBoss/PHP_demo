<?php 
$title ='For Loop Statement';
include 'includes/header.php'?>
    <?php
    // for loop 
    for ($i = 0; $i<10;$i++){
        echo '<p>This will be printed 10 times</p>';
    }
    for ($i = 1; $i<11; $i++){
        echo "<p>The count is : $i </p>";
    }
    ?>
    <hr></hr>
<?php 
require 'includes/footer.php'
?>