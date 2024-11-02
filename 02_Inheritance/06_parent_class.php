<?php

// Creating a parent class with name Book which inherits two more classes in the next file. By this way we can avoid code duplication and redundancy.

class Book {
    public $name;
    public $author;
    public $price;

    public function __construct(string $name, string $author, int $price)
    {
        $this->name = $name;
        $this->author = $author;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function priceAsCurrency() : string
    {
        return '$' . $this->price / 100;
    }
}