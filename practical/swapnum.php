<?php

$number1 = 10;
$number2 = 20;

echo "Original Numbers: ";
echo "Number 1: $number1, Number 2: $number2";

$temp = $number1;
$number1 = $number2;
$number2 = $temp;

echo "<br>Swapped Numbers: ";
echo "Number 1: $number1, Number 2: $number2";
?>

