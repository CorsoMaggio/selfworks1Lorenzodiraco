<?php
$pietanza = "insalata";
$costo;

switch ($pietanza) {
    case "pizza";
        $costo = 6;

        break;
    case "birra";
        $costo = 3;

        break;
    case "panino";
        $costo = 8;

        break;
    case "dessert";
        $costo = 3;

        break;
    default;
    case "insalata";
        $costo = 0;
}
if ($costo) {
    echo "hai ordinato $pietanza . Prezzo $costo";
} else {
    echo "$pietanza non c'è";
}
