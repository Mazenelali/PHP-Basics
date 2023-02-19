
<?php

    function factorial ($number){
        $start = 1;
        $result = 1;
        while ($start <= $number){

            $result = $result*$start;
            

            $start ++;
        }
       
       return $result ;
    }
   echo factorial(3)
?>