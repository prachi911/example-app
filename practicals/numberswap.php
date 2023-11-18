<?php
// Function to swap two numbers
function swapNumbers(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

// Example usage
$num1 = 5;
$num2 = 10;

echo "Before swapping: num1 = $num1, num2 = $num2\n";

// Call the swapNumbers function
swapNumbers($num1, $num2);

echo "After swapping: num1 = $num1, num2 = $num2\n";
?>
