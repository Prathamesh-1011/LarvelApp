<?php

// Define a function to swap two numbers by reference
function swapNumbers(&$a, &$b) {
    $temp = $a;  // Store the value of $a in a temporary variable
    $a = $b;     // Update the value of $a with the value of $b
    $b = $temp;  // Update the value of $b with the value from the temporary variable
}

$number1 = 5;
$number2 = 10;

echo "Before swapping: Number 1 = $number1, Number 2 = $number2<br>";

// Call the swapNumbers function to swap the values of $number1 and $number2
swapNumbers($number1, $number2);

echo "After swapping: Number 1 = $number1, Number 2 = $number2";

?>

