<?php 

function countWord($text ,$word ){
$var = count(explode(" ",$text));
$array = explode(" ",$text);
$i=0;
$j=0;
while ($i<= $var){
    if($array[$i] == $word ){
        $j=$j+1;
        
    }
    $i++;
}echo $j;
}
echo countWord("hello hello hello mhamd hello elali","hello")

?>