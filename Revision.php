<?php 

function test1()
{
static $a = 0;
echo $a;
$a++;
}


echo "<h1>Sohyeb Jarwan</h1>";
print("ya hlaaa<br>");
echo "I'm PHP Developer.<br>";
echo "Mohamemd","bni" , "Jarwan<br>";

echo 'if you want to serve PHP code in XHTML or XML documents,
use these tags<br>'; 

// This is Comments.

$example = "Moh_jar";

$var = "Bob";
$Var = "Joe";

echo "$var , $Var <br>";

// Assign By Reference.

$a = "a";
$b = &$a;
$b = "b";

echo "$a , $b<br>";

$boool = TRUE;
$a_str = "fsdfsdf";
$a_int = 123;
$a_float = 123.012;

echo "$a_float<br>";

function test(){
    global $a_float,$a_int;
    $a_float = $a_float + $a_int;
}

echo $a_float ."<br>";
test1();
test1();
test1();
test1();
/////////////////////

$var_1 = 'hello';
$$var_1 = 'world';

echo "<br>$var_1 ${$var_1}";

$r = $a_int ** 2;
echo "<br>".$r;
$bool_cond = $a_int <=> $a_float;
echo "<br>".$bool_cond;

// and operator && 
// or operator ||
// Not operator !
$a_1 = 1;
$bol_1 = is_null($a_1) ? $a_int : $b;
echo "<br>". $bol_1;
echo '${$var}'; // Outputs ${$var}
echo "<br> ${var}";

echo "<br>sohyeb jrwan\rf";

$str = <<<'ROE'
<br>sohyeb bni jarwan,
ya hlaa wallah,
ROE;

echo $str;

echo "<hr>";
///////////////////////////////////////////////////////////////

// Strings functions

$string_1 = "mohammed rsool allah";

echo strpos($string_1,'R'); // strpos => string position
echo stripos($string_1,'S'); // stripos

echo "<br>".strrpos($string_1,'a');
echo "<br>".strripos($string_1,'L');
echo "<br>". strlen($string_1);

echo "<br>". strtoupper('abcdefg');

echo "<br>".substr("jarwannn",3,-1); // will return og substr

echo "<br>". substr("bni_asfar",-3,-1);


echo "<br>  so_yeb   ";

echo "<br>".ucfirst("yasser ahmed");

echo "<br>".ucwords("yasser ahmed");

echo "<br>".str_pad("jarwan",10,'_');
echo "<br>". str_repeat("*", 50);
$replace = "bni jarwan";

$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
var_dump($onlyconsonants);

$ahmed = "g";
$replaced = str_replace($ahmed,"R","ggggggggg");
echo "<br>" . $replaced;

// $va = "sohyeb jarwan";
// if(str_ends_with($va,'jarwan'))
//     echo "<br> Has jarwan";
// else 
//     echo "<br> Hasn't jarwan";

/////////////////////////////////////////

$string = 'The lazy fox jumped over the fence';
