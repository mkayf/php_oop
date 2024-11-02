<?php

class Product {
    public $name;
    public $price;

    public function __construct($name = 'Bottle',$price = 300) {
        $this->name = $name;
        $this->price = $price;
    }
}

$water_bottle = new Product(price: 300);

// print $water_bottle->name . '<br>';
// print $water_bottle->price . '<br>';

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// constructor promoted properties

class Phone {
    // By using constructor promoted properties we don't have to define properties and then defining constructor. We can do all this in one go after PHP 8

    public function __construct(public $brand = 'Samsung', public $model = 'On7') {}


}

$Xioami_phone = new Phone(model : 'S23 Ultra');

print $Xioami_phone->brand . '<br>';
print $Xioami_phone->model. '<br>';