<?php

/*
str-replace: str-replace(Search, Replace, String, Count ) */

$str = "I love PHP too much because PHP is good and easy language and PHP is Famous";  
echo $str . "<br>";

$str = explode(" ", $str);

echo "<pre>"; 

print_r($str); 

echo "</pre>"; 

$str = str_replace("PHP", "Javascript", $str, $str); 

echo "<pre>"; 

print_r($str); 

echo "</pre>"; 