<?php
namespace Practical;

class Practical {
    // Static function to print "Hello, World!"
    public static function printHello() {
        echo "Hello, World!\n";
    }

    // Static function to add two numbers
    public static function add($num1, $num2) {
       
        if (!is_numeric($num1) || !is_numeric($num2)) {
               throw new \InvalidArgumentException("Arguments must be numeric values or strings");
            }
            return $num1 + $num2;
        }
    

    // Static function to generate a Fibonacci sequence
    public static function generateFibonacciSequence($n) {
        if (!is_int($n)) {
            throw new \InvalidArgumentException("Argument must be an integer");
        }
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

// Example usage:
Practical::printHello();

$result = Practical::add(5, 3);
echo "Sum: " . $result . "\n";

$fibonacciSequence = Practical::generateFibonacciSequence(10);
echo "Fibonacci Sequence: " . implode(", ", $fibonacciSequence) . "\n";
?>