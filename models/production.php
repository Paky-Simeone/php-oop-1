<?php
class Production{
    public $title;
    public $language;
    public $vote;

function __construt(
    string $title,
    string $language,
    int $vote,
){
    $this->title = $title;
    $this->language = $language;
    $this->vote = $vote;
}

}