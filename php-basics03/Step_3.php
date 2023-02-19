<?php 

function countWord($text ,$word ){
$var = count(explode(" ",$text));
$array = explode(" ",$text);
$i=0;
while ($i<= $var){
    if($array[$i] == $word ){
        echo $word." ";
        
    }
    $i++;
}
}
echo countWord("hello hello hello mhamd hello elali","hello")

?>