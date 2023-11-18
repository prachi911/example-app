<?php
// Function to generate Fibonacci sequence using a loop
function generateFibonacci($n) {
    $fibonacciSequence = [0, 1];

    for ($i = 2; $i < $n; $i++) {
        $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }

    return $fibonacciSequence;
}

// Set the number of Fibonacci numbers to generate
$numberOfFibonacciNumbers = 10;

// Call the function
$fibonacciSequence = generateFibonacci($numberOfFibonacciNumbers);

// Display the generated sequence
echo "Fibonacci Sequence (using loop): " . implode(", ", $fibonacciSequence) . "\n";
?>
