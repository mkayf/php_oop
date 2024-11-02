<?php

class Playlist {
    // Here the concept of Encapsulation is being applied by assigning private access modifier to the property $songs. The purpose of doing that is encapsulating data which means the property of a class cannot be directly modified and access by outer class methods.
    private $songs = [];

    // Here is the public function which add songs to the songs array.
    // The type of parameter which this function accepts should be only of the Song class.
    public function addSongs(Song $song) : void
    {
        $this->songs[] = $song;
    }

    // Here is the public function which returns the song array.

    public function getSongs() : array
    {
        return $this->songs;
    }
}