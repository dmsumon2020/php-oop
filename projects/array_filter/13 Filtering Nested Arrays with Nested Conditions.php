<?php
//Filtering Nested Arrays with Nested Conditions
//Filter a multidimensional array with nested conditions on nested arrays:

// only those with grades greater than 70 

$students = [
    ['name' => 'Alice', 'grades' => [85, 90, 78]],
    ['name' => 'Bob', 'grades' => [60, 65, 70]],
    ['name' => 'Charlie', 'grades' => [95, 92, 88]]
];



















$callBack = function($student){
    return min($student['grades']) > 70;
};

$result = array_filter($students, $callBack);

echo '<pre>';
print_r($result);
echo '</pre>';