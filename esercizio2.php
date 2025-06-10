<?php
const ANNO = 2025;
$anno = 2020;
$eta = ANNO - $anno;
if (ANNO <= $anno) {
    echo "hai una delorean?";
} elseif ($eta <= 3) {
    echo "sei troppo piccolo";
} elseif ($eta > 4) {
    echo "ok";
}
