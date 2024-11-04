<?php
//Activity 8: Factorial Calculator
$number = 5;
$factorial = 1;
for ($i = $number; $i >= 1; $i--) {
  $factorial *= $i;
}
echo"The factorial of $number is: " . $factorial;
?>