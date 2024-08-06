<?php

// The substr function in PHP is used to return a part of a string. 
// It's very useful for extracting specific parts of a string based 
// on starting position and length.

//substr(string $string, int $start, ?int $length = null): string

// substr(string, start, length) 

$url = "https://example.com/path/to/resource";
$start = strpos($url, ".com") + 4;
$path = substr($url, $start);

echo $path; // Output: /path/to/resource