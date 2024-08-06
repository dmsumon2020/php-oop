<?php

// Counting the Length of All Strings in an Array
// output 29

$strings = array("Hello", "World", "PHP", "array_reduce", "Love");

function stringCounter($initial, $string) {
    return  strlen($string) + $initial;
}

$stringLength = array_reduce($strings, 'stringCounter', 0);

echo $stringLength;