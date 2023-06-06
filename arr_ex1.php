<?php 
echo "<h1>The First Exercise</h1>";
$arr = [1,2,3,4,5,6,7,8,9];
$arr_temp = array();
foreach ($arr as $value){
    if($value%2 != 0){
        $arr_temp[]= $value; 
    }
}

var_dump($arr_temp);


echo "<hr>";
echo "<h1>The second Exercise</h1>";


$arr_strings = [
    'a' => "rewreeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee",
    'b' => "Jarwan",
    'c' => 'Loui Rashed Matter'
];
$long_String = '';

foreach ($arr_strings as $key => $value) {
    if(strlen($value) > strlen($long_String))
        $long_String = $value;
}
echo $long_String;

echo "<hr>";
echo "<h1>The Third Exercise</h1>";

$a = [4,3,6,235,64];
$b = [4,2,5,2,3];

$multily = array();
$index = 0;

// foreach ($a as $value) {
//     $multily[] = $value * $b[$index];
//     $index++;
// }

foreach ($a as $key => $value) {
    $multily[] = $value * $b[$key];

}


var_dump($multily);


echo "<hr>";
echo "<h1 style =\"color :red;\">The End of Arrays Exercises</h1>";


