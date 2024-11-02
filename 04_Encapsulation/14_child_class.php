<?php

class Song {
    public $title;
    public $numberOfPlays;

    public function __construct($title, $numberOfPlays)
    {
        $this->title = $title;
        $this->numberOfPlays = $numberOfPlays;
    }
}