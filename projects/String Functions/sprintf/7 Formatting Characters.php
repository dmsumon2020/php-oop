<?php
// The sprintf function in PHP is used to format a 
// string according to a specified format. It is 
// similar to printf, but instead of printing the 
// formatted string directly, it returns it.


// %s – String
// %d – Integer
// %f – Floating-point number
// %x – Hexadecimal number
// %o – Octal number
// %b – Binary number
// %c – Character


// sprintf(string $format, mixed ...$values): string

//sprintf(format,arg1,arg2,arg++) 

$charCode = 65; // ASCII code for 'A'
$formatted = sprintf("The character is %c", $charCode);

echo $formatted; // Output: The character is A