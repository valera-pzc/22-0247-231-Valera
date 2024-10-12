<?php
// Activity #9 FizzBuzz Challenge
for ($i = 1; $i <= 50; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) {
    echo "FizzBuzz ";
  } elseif ($i % 3 == 0) {
    echo "Fizz ";
  } elseif ($i % 5 == 0) {
    echo "Buzz ";
  } else {
    echo $i . " ";
  }
}
?>