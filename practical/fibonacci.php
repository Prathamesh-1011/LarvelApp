<?php

// Function to generate and print the Fibonacci sequence up to 'n' terms
function generateFibonacci($n) {
    $fibonacci = array(); // Create an empty array to store the Fibonacci sequence
    
    // Initialize the first two Fibonacci numbers
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;
    
    // Generate and store the Fibonacci sequence
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    
    return $fibonacci;
}

// Number of Fibonacci terms to generate
$numTerms = 10;

// Call the generateFibonacci function to get the sequence
$fibonacciSequence = generateFibonacci($numTerms);

// Display the Fibonacci sequence
echo "Fibonacci sequence for the first $numTerms terms: ";
foreach ($fibonacciSequence as $term) {
    echo $term . " ";
}

?>

