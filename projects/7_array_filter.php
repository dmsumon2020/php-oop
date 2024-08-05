<?php
// [0] => 123
// [2] => 456

$values = ['123', 'abc', '456', 'def'];

echo '<pre>';
print_r($values);
echo '</pre>';

$callback = function ($value) {
    if (is_numeric($value)) {
        return $value;
    }
};

$a = array_filter($values, $callback);

echo '<pre>';
print_r($a);
echo '</pre>';