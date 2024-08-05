<?php

//Filter an array of associative arrays (e.g., a list of users) to retain only users older than 18

$users = [
    ['name' => 'Alice', 'age' => 25],
    ['name' => 'Bob', 'age' => 17],
    ['name' => 'Charlie', 'age' => 30],
    ['name' => 'David', 'age' => 15]
];



















echo '<pre>';
print_r($users);
echo '</pre>';

$result = array_filter($users, function($user) {
    return $user['age'] > 20;
}, ARRAY_FILTER_USE_BOTH);

echo '<pre>';
print_r($result);
echo '</pre>';
