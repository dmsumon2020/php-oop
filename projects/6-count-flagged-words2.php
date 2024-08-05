<?php

function countFlaggedWords($inputString, $flaggedWords) {
    $wordCount = array();

    // Loop through each flagged word
    foreach ($flaggedWords as $word) {
        // Create a regex pattern to match the word with word boundaries
        $pattern = '/\b' . preg_quote($word, '/') . '\b/i';

        // Count the number of matches
        preg_match_all($pattern, $inputString, $matches);
        $wordCount[$word] = count($matches[0]);
    }

    return $wordCount;
}

// Example usage
$inputString = "This is a test. This test is only a test. Testing the test.";
$flaggedWords = array("test", "only", "is");

$flaggedWordsCount = countFlaggedWords($inputString, $flaggedWords);

foreach ($flaggedWordsCount as $word => $count) {
    echo "The word '$word' appeared $count times.\n";
}