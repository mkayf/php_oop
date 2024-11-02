<?php


// Type hinting is a concept that provides hints to function for the expected data type of arguments.

class Song {
    public function __construct(public string $name, public int $numberOfPlays){}
}

$song1 = new Song('Chal Paray', 260);
$song2 = new Song('Tere Bin', 160);
 
// $song1 = new Song('chal paray', 100);
// print $song1->name . '<br>';
// print $song1->numberOfPlays;