<?php

$str = "sor 3 fdffsd 432 24 2"; 
$counter = 0;


for ($i=0; $i < strlen($str); $i++) { 
    if(is_numeric($str[$i]))
     $counter++;
}

echo "The Number of numbers in string str is: $counter";