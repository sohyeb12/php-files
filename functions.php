<?php
function foo()
{
    function bar()
    {
    echo "<br><br>I don't exist until foo() is called.\n";
    }
}
$y =2;

$func = function($x) {
 global $y;
 return $x + $y;
};

$y =8;
echo $func(5);

$arr = ['d','g','t'];

$arr = array_map('strtoupper',$arr);
echo "<br>";
var_dump($arr);

foo();
bar();