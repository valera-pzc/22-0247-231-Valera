<?php
// Activity #4 Loop Control
for ($i = 1; $i <= 10; $i++) {
    if($i == 5) {
        continue;
    }
    if($i == 9) {
       break;
    
    }
    echo $i . " ";
}
echo"\n";
?>