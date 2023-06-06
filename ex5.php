<?php 
$num1 = 102;
$num2 = 98;
$target = 100;
if($num1> 100)
 echo "num2 is clostest";
 elseif($num2> 100)
 echo "num1 is clostest";
elseif(abs($num1 - $target) < abs($num2 - $target))
 echo "num 1 the clostest.";
elseif(abs($num1 - $target) > abs($num2 - $target))
echo "num 2 the clostest.";
elseif ($num1 == $num2)
 echo "0";