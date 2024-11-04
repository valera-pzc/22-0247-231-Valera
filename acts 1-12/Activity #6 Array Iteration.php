<?php

//Activity 6: Array Iteration
$movies = ["The Shawshank Redemption", "Inception", "The Dark Knight", "Interstellar", "Parasite"];
foreach ($movies as $index => $movie) {
  echo ($index + 1) . ". $movie\n";
}
?>