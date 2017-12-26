<?php

//array_multisort
$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 3, 2, 7);
array_multisort($ar1, $ar2);
var_dump($ar1);
var_dump($ar2);

echo "<br/>";

//asort
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $val)
 {
    echo "$key = $val<br/>\n";
 }

echo "<br/>";
 
//arsort
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val<br/>\n";
}

echo "<br/>";

//krsort
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
krsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val<br/>\n";
}
echo "<br/>";

//ksort
 $fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
ksort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val<br/>\n";
}
echo "<br/>";

//natcasesort()
$array1 = $array2 = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');

sort($array1);
echo "<br/>Standard sorting\n";
print_r($array1);

natcasesort($array2);
echo "<br/>\nNatural order sorting (case-insensitive)\n";
print_r($array2);

echo "<br/>";

//natsort
$array1 = $array2 = array("img12.png", "img10.png", "img2.png", "img1.png");

asort($array1);
echo "<br/>Standard sorting\n";
print_r($array1);

natsort($array2);
echo "<br/>\nNatural order sorting\n";
print_r($array2);

echo "<br/>";

//rsort
$fruits = array("lemon", "orange", "banana", "apple");
rsort($fruits);
foreach ($fruits as $key => $val) {
    echo "<br/>$key = $val\n";
}
echo "<br/>";

//shuffle()
$numbers = range(1, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}

echo "<br/>";

//sort
$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}

echo "<br/>";

//uasort
// Comparison function
function cmp($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}
// Array to be sorted
$array = array('a' => 4, 'b' => 8, 'c' => -1, 'd' => -9, 'e' => 2, 'f' => 5, 'g' => 3, 'h' => -4);
echo "<br/>";
print_r($array);
echo "<br/>";
// Sort and print the resulting array
uasort($array, 'cmp');
print_r($array);

//uksort
function cmp2($a, $b)
{
    $a = preg_replace('@^(a|an|the) @', '', $a);
    $b = preg_replace('@^(a|an|the) @', '', $b);
    return strcasecmp($a, $b);
}

$a = array("John" => 1, "the Earth" => 2, "an apple" => 3, "a banana" => 4);

uksort($a, "cmp2");

foreach ($a as $key => $value) {
    echo "<br/>$key: $value\n";
}

echo "<br/>";
//usort
function cmp3($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);

usort($a, "cmp3");

foreach ($a as $key => $value) {
    echo "<br/>$key: $value\n";
}

?>
