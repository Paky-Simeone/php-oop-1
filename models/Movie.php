<?php
require_once __DIR__ ."/Production.php";

class Movie extends Production {
    public $profit;
    public $duration;

    function __construct(
        string $title,
        string $language,
        int $vote,
        Genre $genere,
        string $profit,
        string $duration,
    ){
        parent::__construct($title, $language, $vote, $genere);
        $this->profit = $profit;
        $this->duration = $duration;
    }
}