<?php


// $string = "mohammed jarawan";
// echo "<br>".strpos($string,'A');


// echo str_pad("mohamemd",20,'_');


// if and 
// $num = 3; 

// switch($num){
//     case 0: 
//         $num += 12;
//         break;
//     case 1: 
//     case 2: 
//         $num += 14;
//         break;
//     case 3:
//         $num += 17;

//     default:
//         echo "is the defualt Case";
//         $num += 1;
// }

// echo "<br>". $num;
// $i = 3;
// switch ($i) {
//     case 0:
//     case 1:
//     case 2:
//         echo "i is less than 3 but not negative";
//         break;
//     case 3:
//         echo "i is 3<br>";
//     default:
//         echo "is the defualt Case";
// }

$count = 1;
while($count <= 10){
    echo "$count<br>";
    $count++;
}

echo str_repeat('_',50) . "<br>";

$count_1 = 0;
do{
    echo "$count_1<br>";
    $count_1++;
}while($count_1 < 10);

echo str_repeat('_',50) . "<br>";

for($i=0;$i < 10;$i++){
    echo $i."<br>";
}

echo str_repeat('_',50) . "<br>";


for ($i = 0; $i < 5; ++$i) {
    if ($i == 2) {
    continue;
    }
    echo "$i\n";
}