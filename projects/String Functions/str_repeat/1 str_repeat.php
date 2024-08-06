<?php

// The str_repeat function in PHP is used to repeat a string 
// a specified number of times. It's useful for generating 
// repeated patterns or padding strings.

// str_repeat(string $string, int $multiplier): string

$text = "Hello ";
$repeated = str_repeat($text, 3);

echo $repeated; // Output: Hello Hello Hello 


$pattern = "*";
$repeated = str_repeat($pattern, 10);

echo $repeated; // Output: **********