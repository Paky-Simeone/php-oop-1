<?php
require_once __DIR__ ."/Genre.php";
class Production{
    public $title;
    public $language;
    public $vote;
    public $genere;
function __construct(
    string $title,
    string $language,
    int $vote,
    Genre $genere,
){
    $this->title = $title;
    $this->language = $language;
    $this->vote = $vote;
    $this->genere = $genere;
}

};