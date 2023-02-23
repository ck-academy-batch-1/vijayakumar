<?php
echo "<pre>";
$rows = 4;
$spaces = $rows - 1;

// Printing upper half of the diamond
for ($i = 1; $i <= $rows; $i++) {
    // Printing spaces
    for ($j = 1; $j <= $spaces; $j++) {
        echo "  ";
    }

    // Printing numbers in increasing order
    for ($j = 1; $j <= $i; $j++) {
        echo ($j * 3) . " ";
    }

    // Printing numbers in decreasing order
    for ($j = $i-1; $j >= 1; $j--) {
        echo ($j * 3) . " ";
    }

    echo "\n";
    $spaces--;
    
}

$spaces = 1;

// Printing lower half of the diamond
for ($i = $rows-1; $i >= 1; $i--) {
    // Printing spaces
    for ($j = 1; $j <= $spaces; $j++) {
        echo "  ";
    }

    // Printing numbers in increasing order
    for ($j = 1; $j <= $i; $j++) {
        echo ($j * 3) . " ";
    }

    // Printing numbers in decreasing order
    for ($j = $i-1; $j >= 1; $j--) {
        echo ($j * 3) . " ";
    }

    echo "\n";
    $spaces++;
}
echo "</pre>";
?>