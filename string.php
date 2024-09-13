<?php
// Define the array of strings
$strings = ["Hello", "World", "PHP", "Programming"];


// count the number of vowels in a string
function countVowels($string){

$vowels = ['a','e','i','o','u'];
$count =0;

// convert the string to lowercase for case-insensitivity 

$lowerString = strtolower($string);


for($i=0; $i<strlen($lowerString); $i++){
    if(in_array($lowerString[$i], $vowels)){
        $count++;
    }
}

return $count;

}

foreach ($strings as $string) { 
    $vowelCount = countVowels($string);
    $reversedString = strrev($string);
    $results[] = "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString";
}
foreach ($results as $result) {
    echo $result . "\n";
}


