<?php


$Jumanji = new Production(
    "Jumanji",
    "Inglese",
    7,
);

$Booleaners_and_Dragons = new Production(
    "Booleaners and Dragons",
    "Italiano",
    10,
);

$Io_sono_Bonvi = new Production(
    "Io sono Bonvi",
    "Italiano",
    8,
);

$Film = [
    $Jumanji,
    $Booleaners_and_Dragons,
    $Io_sono_Bonvi,
];
var_dump( $Film );