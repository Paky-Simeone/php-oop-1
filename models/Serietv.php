<?php
require_once __DIR__ ."/Production.php";

class Serietv extends Production {
    public $seasons;
    public $ep;

    function __construct(
        string $title,
        string $language,
        int $vote,
        Genre $genere,
        int $seasons,
        int $ep,
    ){
        parent::__construct($title, $language, $vote, $genere);
        $this->profit = $seasons;
        $this->duration = $ep;
    }
}