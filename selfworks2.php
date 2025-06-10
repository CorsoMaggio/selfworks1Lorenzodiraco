<?php
const BUDGET = 1000;

$cifra = 1000;
if ($cifra <= 1000) {
    $valore_calcolato = round($cifra / 3);
    echo "paga in 3 rate da $valore_calcolato";
} else if ($cifra >= 1000) {
    echo "non puoi rateizzare";
}
