<?php


class Product {
    public $name = 'Ball pen';
# Challenge 1:
// 1. Create a price property and give it a default integer value
    public $price = 25;
}

$pen = new Product();
// 2. Access the price on a product object and print it
// print $pen->price . "\n";
// 3. Change the price
$pen->price = 20;
// 4. Access the (new) price on a product object and print it
// print $pen->price . "\n";


# Class methods:

class Animal {
    public $animal_name;
    public $animal_age;

    public function changeAnimalAge (){
        $changedAge = $this->animal_age * 2;
        return $changedAge;
    }

    public function setAnimalName ($name = 'lion'){
        $this->animal_name = $name;
        return $this->animal_name;
    }
}

$lion = new Animal();
// print $lion->animal_age;
$lion->animal_age = 5;
// print $lion->changeAnimalAge();

$deer = new Animal();
print $deer->setAnimalName('Deer') . '<br>';

$deer->animal_age = 9;
print $deer->changeAnimalAge();

