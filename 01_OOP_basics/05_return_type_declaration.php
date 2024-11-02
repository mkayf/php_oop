<?php

class Song {
    public function __construct(public string $name, public int $numberOfPlays){}
}


class Playlist {
    public $songs = [];
 
    public function addSongs(Song $song){
     $this->songs[] = $song;
    }

    // Return type declarations specify the expected type of the value that a method or function will return
    public function getLength(): int // here return type is integer
    {
        return count($this->songs);
    }
 }

 $new_playlist = new Playlist;

 $song1 = new Song('Aadat', 2600);
 $song2 = new Song('Old Money', 1700);

 $new_playlist->addSongs($song1);
 $new_playlist->addSongs($song2);


 if($new_playlist->getLength() < 10){
    print 'Short playlist...';
 }

 