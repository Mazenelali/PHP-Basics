<?php
function greaterFn($num){
    if ($num<10){
        echo "$num is less than 10";
    }elseif ($num>10 && $num<20){
        echo "$num is greater than 10";
    }elseif($num>20 && $num<30){
        echo "$num is greater than 20";
    }else{
        echo "$num is greater than 30";
    }
    
}

echo greaterFn(5);
echo "<br>";
echo greaterFn(15);
echo "<br>";
echo greaterFn(22);
echo "<br>";
echo greaterFn(55);
?>