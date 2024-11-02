<?php

class Song {
    private string $name;
    private int $numberOfPlays;
    private int|float $rating; // This is a property of union datatype which contains integer and float.

    public function __construct(string $name, int $numberOfPlays)
    {
        $this->name = $name;
        $this->numberOfPlays = $numberOfPlays;
    }

    // Set rating

    public function setRating(int|float $rating){
        if($rating > 5){
            $this->rating = 5;
        }
        else if($rating < 0){
            $this->rating = 0;
        }
        else{
            $this->rating = $rating;
        }
    }

    // Get rating
    
    public function getRating() : int|float
    {
        return $this->rating;
    }
}