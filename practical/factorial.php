<?php

// Function to calculate the factorial of a number
function calculateFactorial($n) {
    // Initialize the factorial result to 1
    $factorial = 1;

    // Handle special cases for 0 and 1
    if ($n == 0 || $n == 1) {
        return $factorial;
    }

    // Calculate the factorial using a loop
    for ($i = 2; $i <= $n; $i++) {
        $factorial *= $i; // Multiply the current result by the loop counter
    }

    return $factorial;
}

// Input: the number for which we want to calculate the factorial
$number = 5;

// Call the calculateFactorial function
$result = calculateFactorial($number);

// Display the result
echo "The factorial of $number is $result";

?>


