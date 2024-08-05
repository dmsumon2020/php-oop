<?php

$string = 'He want to blood kill him for no reason kill. To murder is in his blood. I do not kill with gun';

$flaggedWords = [
    'bad',
    'murder',
    'blood',
    'gun',
    'kill'
];

$wordCounts = array_fill_keys($flaggedWords, 0);
echo '<pre>';
print_r($wordCounts);
echo '<pre>';



$pattern = '/\b(?:' . implode('|', array_map('preg_quote', $flaggedWords)) . ')\b/i';
preg_match_all($pattern, $string, $matches);



echo '<pre>';
print_r($matches);
echo '<pre>';


foreach ($matches[0] as $match) {
   if (array_key_exists($match, $wordCounts)) {
    $wordCounts[$match] +=1;
   }
}

echo '<pre>';
print_r($wordCounts);
echo '<pre>';


echo "Flagged Words Count:<br>";

foreach ($wordCounts as $word => $count) {
   if ($count>0) {
    echo  $word .' : '. $count . '<br>';
   }
}