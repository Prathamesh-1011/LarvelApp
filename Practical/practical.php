<?php

class Practical {
    // Static function to print "Hello, World!"
    public static function printHello() {
        echo "Hello, World!\n";
    }

    // Static function to add two numbers
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    // Static function to generate a Fibonacci sequence
    public static function generateFibonacciSequence($n) {
        $fibonacci = array();
        $a = 0;
        $b = 1;

        for ($i = 0; $i < $n; $i++) {
            $fibonacci[] = $a;
            $temp = $a + $b;
            $a = $b;
            $b = $temp;
        }

        return $fibonacci;
    }
}

// Example usage with user input:
Practical::printHello();

echo "Enter two numbers for addition:\n";
$num1 = (float)readline("Number 1: ");
$num2 = (float)readline("Number 2: ");
$result = Practical::add($num1, $num2);
echo "Sum: " . $result . "\n";

echo "Enter the number of terms for the Fibonacci sequence:\n";
$n = (int)readline("Number of terms: ");
$fibonacciSequence = Practical::generateFibonacciSequence($n);
echo "Fibonacci Sequence: " . implode(", ", $fibonacciSequence) . "\n";
