<?php 

$first = 30;
$second = 21;

if(($first < 30 && $first > 20) && ($second < 30 && $second > 20)){
 if($first > $second)
  echo "first is greator";
 elseif($first < $second)
  echo "second is greator";
}
else
 echo "0";