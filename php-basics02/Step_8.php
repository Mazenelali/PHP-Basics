<?php
function check ($num){
    if ( ($num & ($num -1)) ==0 ){
        echo "$num is power of 2";
    }else{
        echo "$num is NOT power of 2";
    }
}
echo check(16)
?>