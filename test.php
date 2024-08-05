<?php
// The string to be analyzed
$text = "This is a sample text with Kutta, kutta, tui kutta 
Haramir Bachcha, Haramir bassa, and Haramkhor. Kutta is repeated Kutta.";

// Array of flagged words to check
$flaggedWords = [
    'Kutta',
    'Harami',
    'Haramir Bachcha',
    'Haramir bassa',
    'Haramkhor'
];

// Convert the array of flagged words into a regex pattern
$pattern = '/\b(' . implode('|', array_map('preg_quote', $flaggedWords)) . ')\b/i';

// Initialize an array to keep track of word counts
$wordCounts = array_fill_keys($flaggedWords, 0);

// Perform the matching
preg_match_all($pattern, $text, $matches);

// Count occurrences
foreach ($matches[0] as $match) {
    // Normalize the match to match the case of the keys in $wordCounts
    $normalizedMatch = ucfirst(strtolower($match));
    if (array_key_exists($normalizedMatch, $wordCounts)) {
      echo   $wordCounts[$normalizedMatch] += 1 ; 
    }
}

// Output the count of each flagged word
echo "Flagged Words Count:<br>";
foreach ($flaggedWords as $word) {
    if ($wordCounts[$word] > 0) {
        echo "{$word}: {$wordCounts[$word]}<br>";
    }
}
?>
