<?php

function sumDigit($num){
    $x = strlen($num);
    $j = 0;
    for($i=0 ; $i <= $x ; $i++){
        echo $j += $num[$i];
    }

}
echo sumDigit("1235");
?>