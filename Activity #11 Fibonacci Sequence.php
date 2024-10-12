<?php
// Activity #11 Fibonacci Sequence
$num1 = 0;
$num2 = 1;
$count = 0;
$n = 10;

while ($count < $n) {
    echo $num1 . " ";
    $next = $num1 + $num2;
    $num1 = $num2;
    $num2 = $next;
    $count++;
}
echo "\n";
?>