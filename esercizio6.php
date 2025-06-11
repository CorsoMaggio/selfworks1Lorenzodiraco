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

    for ($i = 0; $i < count($arrays); $i++) {
        $nome = $arrays[$i]['name'];
        $genere = $arrays[$i]['gender'];

        if ($genere == 'M') {
            echo "Buongiorno Sig. $nome\n";
        } elseif ($genere == 'F') {
            echo "Buongiorno Sig.ra $nome\n";
        } else {
            echo "$nome ha preferito non specificare.\n";
        }
    }
