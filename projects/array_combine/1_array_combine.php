<?php

//array_combine($array1, $array2);
//If the number of elements in the $keys and $values arrays are not equal, 
//the function will return false and emit an error:


// Combining Two Arrays into an Associative Array
echo '<h2>Example - 1</h2>';

$keys = ['name', 'age', 'city'];
$values = ['Alice', 25, 'New York'];
  
$combined = array_combine($keys, $values);
  
echo '<pre>';
print_r($combined);
echo '</pre>';