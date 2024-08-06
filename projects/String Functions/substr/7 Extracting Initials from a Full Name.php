<?php

// The substr function in PHP is used to return a part of a string. 
// It's very useful for extracting specific parts of a string based 
// on starting position and length.

//substr(string $string, int $start, ?int $length = null): string

// substr(string, start, length) 



$fullName = "John Doe Smith";
$names = explode(" ", $fullName);
$initials = substr($names[0], 0, 1) . substr($names[1], 0, 1) . substr($names[2], 0, 1);

echo $initials; // Output: JDS