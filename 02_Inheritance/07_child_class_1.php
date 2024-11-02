<?php

require_once '06_parent_class.php';

// This is first child class (PhysicalBook) inherited from parent class (Book)

class PhysicalBook extends Book{
    public $weight;

    // Including parameters of parent class in the child class constructor because when we define constructor in child class the parent class constructor become overriden by child class constructor.

    public function __construct(string $name, string $author, int $price, int $weight){

        // Here accessing parent class using parent:: keyword and __construct method and passing arguments of parent class.
        parent::__construct($name, $author, $price);
        $this->weight = $weight;
    }

    public function print()
    {
        return "Book name: {$this->name}, Author: {$this->author}, Price: {$this->price}, Weight: {$this->weight}";
    }
}