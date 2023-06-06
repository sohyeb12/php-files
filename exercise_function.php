<?php 

function prime($number,$flag =0)
{
    $i= (int) ($number/2); // the number 
    for(;$i > 1;$i--){
        if($number%$i == 0){
            $flag++;
            echo "$number is not Prime";
            break;
        }
    }

    if($number == 1)
        echo "$number is not Prime";
    elseif ($flag == 0) {
        echo "$number is Prime";
    }

}

$number = 71;

echo "<h1>";
echo prime($number);
echo"</h1>";

?>