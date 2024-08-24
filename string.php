<?php

// Define the array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count vowels in a string
function countVowels($str) {
    $vowelCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];

    // Convert the string to lowercase to handle case-insensitivity
    $str = strtolower($str);

    // Count vowels
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $vowelCount++;
        }
    }

    return $vowelCount;
}

// Function to reverse a string
function reverseString($str) {
    return strrev($str);
}

// Iterate over each string in the array
foreach ($strings as $string) {
    // Count vowels
    $vowelCount = countVowels($string);
    
    // Reverse the string
    $reversedString = reverseString($string);
    
    // Print the results
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}

?>

