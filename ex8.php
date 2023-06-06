<?php

$number = 2222;
$sum = 0;

while($number != 0){
    $sum += $number % 10;
    $number = (int)$number / 10;
}

echo "<br> <h1>The Sum of digits number is: $sum</h1>";