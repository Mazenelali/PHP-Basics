<?php 

function sumDigit($strNumber) {
    
    $sum = 0 ;
    for($i = 0 ; $i < strlen($strNumber); $i++){
        $sum += $strNumber[$i] ;
    }
    return $sum ;
}
    echo sumDigit("1882")
?>

