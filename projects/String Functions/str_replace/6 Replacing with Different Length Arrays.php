<?php
// The str_replace function in PHP is used to replace all occurrences 
// of a search string with a replacement string within another string. 
// It's a simple and effective way to perform string replacements.

//str_replace(mixed $search, mixed $replace, mixed $subject, int &$count = null): string|array

//  str_replace(find,replace,string,count) 
// count =	Optional. A variable that counts the number of replacements

// Return Value: 	Returns a string or an array with the replaced values$text = "I like apples and oranges.";


$text = "One fish, two fish, red fish, blue fish.";
$search = ["fish", "red"];
$replace = ["cat"];

$result = str_replace($search, $replace, $text);

echo $result; // Output: One cat, two cat, red cat, blue cat.