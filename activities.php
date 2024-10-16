<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header, .footer {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        .content {
            padding: 20px;
        }

        h2 {
            color: #4CAF50;
        }

        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
            overflow: auto;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Activities</h1>
    </div>
    <div class="content">
        <h2>Activity 1: Number Counter</h2>
        <pre>
        <?php
        $i = 2;
        while ($i <= 20) {
            echo $i . " ";
            $i += 2;
        }
        ?>
        </pre>

        <h2>Activity 2: Password Validator</h2>
        <pre>
        <?php
        // Simple web-based password validator
        $correctPassword = "password123";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST['password'];
            if ($input == $correctPassword) {
                echo "Access granted!";
            } else {
                echo "Access denied! Please try again.";
            }
        }
        ?>
        <form method="post">
            <input type="password" name="password" placeholder="Enter password">
            <input type="submit" value="Submit">
        </form>
        </pre>

        <h2>Activity 3: Multiplication Table of 7</h2>
        <pre>
        <?php
        for($i = 1; $i <= 10; $i++) {
            echo "7 x $i = " . (7 * $i) . "\n";
        }
        ?>
        </pre>

        <h2>Activity 4: Loop Control</h2>
        <pre>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            if($i == 5) continue;
            if($i == 9) break;
            echo $i . " ";
        }
        ?>
        </pre>

        <h2>Activity 5: Sum of Numbers</h2>
        <pre>
        <?php
        $sum = 0;
        $i = 1;
        while ($i <= 100) {
            $sum += $i;
            $i++;
        }
        echo "The sum of numbers from 1 to 100 is: " . $sum;
        ?>
        </pre>

        <h2>Activity 6: Array Iteration</h2>
        <pre>
        <?php
        $movies = ["The Shawshank Redemption", "Inception", "The Dark Knight", "Interstellar", "Parasite"];
        foreach ($movies as $index => $movie) {
            echo ($index + 1) . ". $movie\n";
        }
        ?>
        </pre>

        <h2>Activity 7: Key-Value Pairs</h2>
        <pre>
        <?php
        $student = [
            "Name" => "Alice",
            "Age" => "20",
            "Grade" => "A",
            "City" => "Baguio",
        ];
        foreach ($student as $key => $value) {
            echo "$key: $value\n";
        }
        ?>
        </pre>

        <h2>Activity 8: Factorial Calculator</h2>
        <pre>
        <?php
        $number = 5;
        $factorial = 1;
        for ($i = $number; $i >= 1; $i--) {
            $factorial *= $i;
        }
        echo "The factorial of $number is: " . $factorial;
        ?>
        </pre>

        <h2>Activity 9: FizzBuzz Challenge</h2>
        <pre>
        <?php
        for ($i = 1; $i <= 50; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) echo "FizzBuzz ";
            elseif ($i % 3 == 0) echo "Fizz ";
            elseif ($i % 5 == 0) echo "Buzz ";
            else echo $i . " ";
        }
        ?>
        </pre>

        <h2>Activity 10: Prime Number Checker</h2>
        <pre>
        <?php
        $number = 17; 
        $isPrime = true;
        if ($number < 2) $isPrime = false;
        else {
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
        }
        echo $isPrime ? "$number is a prime number." : "$number is not a prime number.";
        ?>
        </pre>

        <h2>Activity 11: Fibonacci Sequence</h2>
        <pre>
        <?php
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
        ?>
        </pre>

        <h2>Activity 12: Reverse a String</h2>
        <pre>
        <?php
        $input = "Hello";
        $reversed = strrev($input);
        echo "Input: \"$input\"\n";
        echo "Output: \"$reversed\"";
        ?>
        </pre>
    </div>
    <div class="footer">
        <p>&copy; <?php echo date("Y"); ?> My Website. All rights reserved.</p>
    </div>
</body>
</html>
