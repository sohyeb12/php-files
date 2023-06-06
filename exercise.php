<?php 
// exercise 1
$full = "sohyeb osama jarwso";

$first = substr($full,0,2);
$second = substr($full,-2,2);

if($first == $second)
 echo "it's simailer";
else
 echo "it's various";