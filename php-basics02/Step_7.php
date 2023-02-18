
<?php
function replace ($word){
$new_word = str_replace("paython" , "php" ,$word);
return $new_word;
}
echo replace("hello paython hbb")
?>