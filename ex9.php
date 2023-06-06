<?php 

$full_str = "Sohyeb_Jarwan";
$new_str = "";

for ($i=0; $i < strlen($full_str); $i++) { 
    $new_str .=  $full_str[strlen($full_str) -1 -$i];
}

echo "<h1> The Reversed String: $new_str</h1>";