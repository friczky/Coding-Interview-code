<?php

// palindrom function
function palindrom($string)
{
    $string = str_replace(' ', '', $string);
    $string = strtolower($string);
    $string = strrev($string);
    if ($string == $string) {
        return true;
    } else {
        return false;
    }
}

