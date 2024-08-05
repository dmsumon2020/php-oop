<?php

//Filtering Non-Empty Strings

$strings = ["apple", "", "banana", " ", "cherry", null, "date"];

$result = array_filter($strings, function($value){
    return trim($value) !== '';
});

echo '<pre>';
print_r($result);
echo '</pre>';