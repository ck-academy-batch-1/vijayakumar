<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Circle Program</h1>
</body>
<?php
echo"<pre>";
echo"<center>";
// Define the radius of the circle
$radius = 20;
// Loop through the rows
for ($y = -$radius; $y <=$radius-1; $y++) {
  // Loop through the columns
  echo "  ";
  for ($x = -$radius+2-1; $x <=$radius-1; $x++) {
    // Calculate the distance from the center of the circle
    $distance = sqrt(($x*$x) + ($y*$y));
    echo " ";
    // If the distance is less than or equal to the radius, print a star
    if ($distance <= $radius) {
      echo "*";
    } else {
      echo " "; // Print a space to create an empty circle
    }
  }
  
  // Move to the next row
  echo "<br>";
  echo "&nbsp; &nbsp; &nbsp;";
}
echo"<pre>";
?>
</html>
