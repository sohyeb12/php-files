<?php 

$arr= [
    'A',
    1.5 => 'B',
    1 => 'C',
    null => 'D',
    '' => 'E',
    '1' => 'F',
    false => 'G',
    'name' => 'mohammed',
    'PHP'
];

$arr[] = "NAWA";


$arr_1 = [
    'a' => 'b',
    'b' => 'c',
    'c' => '1'
];

$array = array("foo","bar","hello",'world');
$arr_1 = array(
    "Sohyeb" => "Jarwan",
    "Taleid" => "wisaha"
);
$arr_2 = array(1,3,"a","r",6 =>'u',"sohyeb");

$arr_3 = array(
    1 => 'a',
    '1' => 'b', // the value "a" will be overwritten by "b"
    1.5 => 'c', // the value "b" will be overwritten by "c"
    -1 => 'd',
    '01' => 'e', // as this is not an integer string it will NOT override the key for 1
    '1.5' => 'f', // as this is not an integer string it will NOT override the key for 1
    true => 'g', // the value "c" will be overwritten by "g"
    false => 'h',
    '' => 'i',
    null => 'j', // the value "i" will be overwritten by "j"
    'k', // value "k" is assigned the key 2. This is because the largest integer key before that was 1
    2 => 'l' );

// multi dimentional array

$arr_4 = array(
    "sohyeb" => "jarwan",
    23 => 44,
    "multui" => array(
        'a' => 14,
        2 => 'rw'
    )
);
var_dump($array);
echo "<br>";
echo "<br>";
var_dump($arr_1);
echo "<br>";
echo "<br>";
var_dump($arr_2);
echo "<br>";
echo "<br>";
var_dump($arr_3);
echo "<br>";
echo "<br>";
var_dump($arr_4);

// array modificatiion (change and remove one and whole element).

$arr_4["sohyeb"] = 'o';
$arr_4[] = 13;

unset($arr_4["sohyeb"]); // will remove the sohyeb key.
// unset($arr_1); // will remove the array $arr_1 as whole.
echo "<br>";
echo "<br>";
var_dump($arr_4);

echo "<br>";
echo "<br>";
// var_dump($arr_1);


// array destructruring
$arr1 = array('Sohyeb','Jarwan','Talal');

[$Sohyeb,$Jarwan,$Talal] = $arr1;

echo "<br>" . $Sohyeb; // prints Sohyeb
echo "<br>" . $Jarwan; // prints Jarwan
echo "<br>" . $Talal . "<br><br>"; // prints Talal


$source_array = [
    [1, 'John'],
    [2, 'Jane'],
];

foreach ($source_array as [$id, $name]) {
echo "$id => $name <br>";
}

$last_vat = array_pop($arr1); // return the last variable and remove it.
var_dump($arr1);
echo "<br>". $last_vat . "<br>";

array_push($arr1,"Hanmad","Kalifa");
var_dump($arr1);

array_shift($arr1);
echo "<br>";
var_dump($arr1);

asort($arr_3);
echo "<br><br>";
var_dump($arr_3);
// array_unshift($arr_1,[ 't' => 'g']);
// var_dump($arr_1);

    