<?php
//Activity 2: Password Validator
$correctPassword = "password123";
do {
    $input = readline("Enter password: ");
} while ($input != $correctPassword);
echo "Access granted! \n";
?>