<?php 
function wordtodigit($number){
switch ($number) {
    case "zero":
       return 0;
        break;
    case "one":
       return 1;
        break;
    case "five":
        return 5;
        break;
}
}
 echo wordtodigit("zero") ; // 0
 echo "<br>";
 echo wordtodigit("one") ; // 1
 echo "<br>";
 echo wordtodigit("five") ; // 5
 
?>
