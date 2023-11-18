<?php
namespace practicals;

class Practical {
    // Static function to print "Hello, World!"
    public static function printHello()
    {
        echo "Hello, World!";
    }

    // Static function to add two numbers
    public static function add($num1, $num2) {
        // Convert input values to numeric type if they are numeric strings
        if (is_numeric($num1)) {
            $num1 = is_string($num1) ? (float) $num1 : $num1;
        } else {
            throw new \InvalidArgumentException("Input value 1 must be numeric.");
        }

        if (is_numeric($num2)) {
            $num2 = is_string($num2) ? (float) $num2 : $num2;
        } else {
            throw new \InvalidArgumentException("Input value 2 must be numeric.");
        }

        return $num1 + $num2;
    }

    // Static function to generate a Fibonacci sequence
    public static function generateFibonacciSequence($n) {
        if (!is_int($n)) {
            throw new \InvalidArgumentException("Input value must be an integer.");
        }

        $fibonacciSequence = [];
        if ($n <= 0) {
            return $fibonacciSequence; // Return an empty array for non-positive integers.
        } elseif ($n == 1) {
            $fibonacciSequence[] = 0; // Special case for n = 1
        } else {
            $fibonacciSequence = [0, 1]; // Initialize the sequence with the first two numbers
            for ($i = 2; $i < $n; $i++) {
                $fibonacciSequence[] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
            }
        }
        return $fibonacciSequence;
    }
}
?>