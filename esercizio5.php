<?php
for ($i = 0; $i <= 30; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo  "Lorenzo\n";
    } elseif ($i % 3 == 0) {
        echo "php\n";
    } elseif ($i % 5 == 0) {

        echo "javascript\n";
    } else {
        echo $i . "\n";
    }
}
