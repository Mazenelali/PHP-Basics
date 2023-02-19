<?php

function shape(){


    $number = 1;
    while ( $number <= 8){
        $repeat = str_repeat("*",$number);
        echo $repeat ."<br>";
        $number ++;
    }
}
echo shape()
?>