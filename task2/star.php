<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Star program</h1>
</body>
</html>
<?php
echo"<pre>";
echo"<center>";
// Define the number of rows and columns for the star pattern
$rows = 10;
$cols = 10;

// Define the symbol for the star
$star = '*';

// Loop through each row and column to create the pattern
for ($i = 1+1; $i < $rows-1; $i++) {
    for ($j = 1+1; $j <= $cols-1; $j++) {
        // If we are in the middle row or column, or if the sum of the row and column is equal to the number of rows plus one, print the star symbol
        if ($i == ceil($rows/2) || $j == ceil($cols/2) || $i + $j == $rows + 1) {
            echo $star;
        } else {
            // Otherwise, print a blank space
            echo " ";
        }
        
    }
    // Print a new line after each row
    //echo "\n";
    echo"<br>";
}

?>
