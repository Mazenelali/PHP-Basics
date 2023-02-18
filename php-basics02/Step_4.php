<?php

function checkArmstrong ($num1 , $num2 , $num3) {
    $sum = $num1 + ($num2 ** $num3); 
    if ($sum == 0 or $sum == 1 or $sum == 153 or$sum == 370 or $sum == 371 or $sum == 407 ){
         echo  "$sum is number armstrong";
    }
    else {
        echo  "$sum is NOT a number armstrong";
    }
}
 echo checkArmstrong(28 , 5 ,3)
?>