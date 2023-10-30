<?php
function fibonacci($n) {
    if ($n <= 0) {
        return [];
    } elseif ($n == 1) {
        return [0];
    } elseif ($n == 2) {
        return [0, 1];
    } else {
        $sequence = [0, 1];
        for ($i = 2; $i < $n; $i++) {
            $next = $sequence[$i - 1] + $sequence[$i - 2];
            $sequence[] = $next;
        }
        return $sequence;
    }
}

$n = 10; // You can change this to the number of terms you want

$fibonacciSequence = fibonacci($n);

echo "Fibonacci sequence up to $n terms: ";
foreach ($fibonacciSequence as $number) {
    echo $number . " ";
}
?>

