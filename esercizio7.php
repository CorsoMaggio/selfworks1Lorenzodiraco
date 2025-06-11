<?php

$arrays = [
    [
        'name' => 'Marco',
        'gender' => 'M',
    ],
    [
        'name' => 'Vanessa',
        'gender' => 'F',
    ],
    [
        'name' => 'Jack',
        'gender' => 'M',
    ],
    [
        'name' => 'Mari*',
        'gender' => '',
    ],
];

foreach ($arrays as $persona) {
    $nome = $persona['name'];
    $genere = $persona['gender'];

    if ($genere == 'M') {
        echo "Buongiorno Sig. $nome\n";
    } elseif ($genere == 'F') {
        echo "Buongiorno Sig.ra $nome\n";
    } else {
        echo "$name ha preferito non specificare.\n";
    }
}
