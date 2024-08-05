<?php
function countFlaggedWords($inputString, $flaggedWords) {
    $wordCount = array();

    // Loop through each flagged word
    foreach ($flaggedWords as $word) {
        // Count the occurrences of the word in the input string
        $count = substr_count(strtolower($inputString), strtolower($word));
        $wordCount[$word] = $count;
    }

    return $wordCount;
}

// Example usage
$inputString = "This Is a test. This test is only a test.";
$flaggedWords = array("test", "only", "is");

$flaggedWordsCount = countFlaggedWords($inputString, $flaggedWords);

foreach ($flaggedWordsCount as $word => $count) {
    echo "<p>The word '$word' appeared $count times.\n</p>";
}
?>