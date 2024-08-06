<?php
echo '<h3>Example - 1</h3>';

$keys = ['a', 'b', 'c'];
$value = 0;

$result = array_fill_keys($keys, $value);

echo '<pre>';
print_r($result);
echo '</pre>';