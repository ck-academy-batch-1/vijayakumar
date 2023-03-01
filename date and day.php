<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Date Functions</h1>
    <?php
    echo"Today is"." ".date("d/m/Y")."<hr><br>";
    echo"Today is"." ".date("Y/m/d")."<hr><br>";
    echo"Today is"." ".date("d/Y/m")."<hr><br>";
    ?>
    <h1> Indian Time</h1>
    <?php
    date_default_timezone_set("Asia/Kolkata");
    echo"Today is"." ".date("h:i:sa")."<hr><br>";
    ?>
    <h1>mktime</h1>
    <?php
    $t=mktime(12, 30, 24, 3, 1, 2023);
    echo "Created date is " . date("Y-m-d h:i:sa", $t);
    ?>
   <br/>
   <hr>
   <h1>strtotime</h1>
  <?php
  $d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
<br/>
<hr>
</body>
</html>