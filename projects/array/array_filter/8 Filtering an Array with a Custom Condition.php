<?php

// Filtering an Array with a Custom Condition

// Filter an array to retain only those elements that are palindromes: (ulta korleo same hoy)

$words = ['racecar', 'hello', 'madam', 'world', 'level'];























$palindromes = array_filter($words, function($word) {
    return $word === strrev($word);
});

echo '<pre>';
print_r($palindromes);
echo '</pre>';