<?php
$somma = 0;

echo "Numeri pari da 1 a 10:\n";

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . "\n";
        $somma += $i;
    }
}

echo "La somma dei numeri da 1 a 10 è: $somma\n";
