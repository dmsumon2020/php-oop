<?php

//Filtering Associative Arrays with Specific Key Patterns

$data = ['prefix_1' => 10, 'prefix_2' => 20, 'no_prefix' => 30, 'prefix_3' => 40];


























$result = array_filter($data, function ($value, $key) {
    return strpos($key, 'prefix_') === 0;
}, ARRAY_FILTER_USE_BOTH);



echo '<pre>';
print_r($result);
echo '</pre>';