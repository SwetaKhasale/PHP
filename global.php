<?php
$x = 5;
$y = 670;

function myTest() {
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; // outputs 15


//PHP also stores all global variables in an array called $GLOBALS[index]. 
?>

