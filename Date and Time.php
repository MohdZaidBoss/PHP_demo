<?php 
$title ='Date and Time Manipulation';
include 'includes/header.php'?>
    <?php
    
    $datenow = getdate();
    echo "Today's date is: ";
    
    echo $datenow['mday'].'/'. $datenow['mon'].'/'. $datenow['year'].'/';
    echo '</br>';
   
    print date("d/m/y G.i:s", time());
    echo '<br/>';
    echo '<hr/>';
    echo "today's time is: ";
    echo '</br>';
    print date("j of F Y, G:i:s", time());
    ?>
    <hr></hr>
<?php 
require 'includes/footer.php'
?>