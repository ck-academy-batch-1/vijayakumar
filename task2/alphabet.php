<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Alphabet Program</h1>
</body>
</html>
<?php
echo"<center>";
echo"<pre>";
// php program to print
// alphabet A pattern

// Function to display
// alphabet pattern
function display($n)
{
	
	// Outer for loop for
	// number of lines
	for ($i = 0; $i < $n; $i++)
	{

		// Inner for loop for
		// logic execution
		for ($j = 0; $j <= floor($n / 2); $j++)
		{

			
			// prints two column lines
			// print first line of alphabet
			// prints middle line			
			if (($j == 0 || $j == floor($n / 2)) &&
				$i != 0 || $i == 0 && $j != 0 &&
				$j != floor($n / 2) ||
				
				$i == floor($n / 2))
				echo "***";
			else
				echo "   ";
		}

		echo "\n";
	}
    echo"<br>";
    for ($row=0; $row<=7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
		 
     if ((($row == 0 or $row == 6) and $column >= 0 and $column <= 6) or $row+$column==6)
            echo "**";    
			
        else  
            echo "  ";     
	}        
	
  echo "\n";
}

}
// Driver Function
$n=7;
display($n);
echo"<pre>";
// This code is contributed by mits
?>
