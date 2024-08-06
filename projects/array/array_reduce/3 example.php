
<?php 
// PHP function to illustrate the use of array_reduce() 
function own_function($element1, $element2) 
{ 
    return  $element1 * $element2; 
    //return $element1; 
} 
  
$array = array(2, 4, 5, 10, 100); 
print_r(array_reduce($array, "own_function", $array[0])); 

