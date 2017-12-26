<?php
$x = 770;
$y = 660;

function myTest() {
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; // outputs 15


//PHP also stores all global variables in an array called $GLOBALS[index]. 
?>

