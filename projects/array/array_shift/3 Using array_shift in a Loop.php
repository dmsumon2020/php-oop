<?php

//Suppose you want to process and remove the first element of an array in a loop until the array is empty.

$tasks = ["Task 1", "Task 2", "Task 3"];

while (!empty($tasks)) {
    $currentTask = array_shift($tasks);
    echo "Processing: $currentTask\n";
}


echo '<pre>';
print_r($tasks); 
echo '</pre>'; 