<?php 
$title ='If Else statement';
include 'includes/header.php'?>
    <?php 
/* this a if else statment */
    echo '<hr>If else statement </hr>';
$grade =  99 ;
if ($grade >= 35) {
    echo '<h3 style = "color: green">You have Passed </h3>';
}
else { 
    echo '<hr3 style = "color: red">You have Failed</hr3>';
}
/* this a else if stmnt*/
$grade = 'g';
if ($grade == 'A'){
    echo '<h2 style = "color : green">You are awsome</h2>';
}
elseif ($grade == 'B') {
echo '<h3 style = "color : blue"> You did well man</h3>';

}
else {
    echo '<h3 style = "color : red ">You failed nigga</h3>';
}

?>
<hr></hr>
<?php 
require 'includes/footer.php'
?>