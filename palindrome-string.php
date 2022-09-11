<?php 

function Palindrome($string){
    if (strrev($string) == $string){
        return 1;
    }else{
        return 0;
    }
}

$input = "madem";
if(Palindrome($input)){
    echo "Palindrome";
}else{
    echo "Not Palindrome";
}