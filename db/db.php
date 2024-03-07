<?php
//  require_once  __DIR__ ."/models/Movie.php";
//  require_once  __DIR__ ."/models/Serietv.php";

$Jumanji = new Movie(
    "Jumanji",
    "Inglese",
    7,
    new Genre("Adventure", "Gioco al quanto simpatico organizzato dal signor Luigi al picnic di pasquetta 2023"),
    "€15",
    120,
);

$Booleaners_and_Dragons = new Movie(
    "Booleaners and Dragons",
    "Italiano",
    10,
    new Genre("Fantasy","Film basato su una drammatica storia vera di cui i protagonisti sono dei semplici alunni della classe 117 del corso boolean che nel mentre della pausa decidono di organizzarsi per giocare ad un gioco divertente iniziando cosi una nuova avventura"),
    "€5000",
    "6 mesi", 
);

$Io_sono_Bonvi = new Serietv(
    "Io sono Bonvi",
    "Italiano",
    8,
    new Genre("StoryTelling","Film autobiografico di un uomo molto simpatico della classe 177 di boolean in giro per il mondo"),
    10,
    300,
);


$Films = [
    $Jumanji,
    $Booleaners_and_Dragons,
    $Io_sono_Bonvi,
];
 //var_dump($Films);
