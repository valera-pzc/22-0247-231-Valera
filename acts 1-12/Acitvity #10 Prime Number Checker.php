<?php
// Activity #10 Prime number checker
$number = 17; 
$isPrime = true;

if ($number < 2) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo "$number is a prime number.\n";
} else {
    echo "$number is not a prime number.\n";
}
?>
