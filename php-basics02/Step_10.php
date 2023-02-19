<?php
function check_palindrome($word){
    if ($word == strrev($word)){
        echo $word." is a polindrome word it will bee ".strrev($word);
    }
    else {
        echo $word." is a NOT polindrome word it will bee ".strrev($word);
    }
} 

echo check_palindrome("lol")
?>