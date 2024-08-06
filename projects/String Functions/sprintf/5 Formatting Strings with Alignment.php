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

$left = sprintf("|%-10s|", "left");
$right = sprintf("|%10s|", "right");

echo $left;  // Output: |left      |
echo $right; // Output: |     right|