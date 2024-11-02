<?php

require_once '03_type_hinting.php';

class Playlist {
   public $songs = [];

   function addSongs(Song $song){
    $this->songs[] = $song;
   }
}


$playlist1 = new Playlist();

$playlist1->addSongs($song1);
$playlist1->addSongs($song2);

foreach($playlist1->songs as $song){
   print $song->name . '<br>';
}
