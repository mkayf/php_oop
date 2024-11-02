<?php

require_once '07_child_class_1.php';
require_once '08_child_class_2.php';

// Physical Book
$Book1 = new PhysicalBook('Rich Dad Poor Dad', 'Robert Kiyosaki', 3600, 300);
// print $Book1->getName() . '<br>';
// print $Book1->getAuthor() . '<br>';
// print $Book1->priceAsCurrency() . '<br>';
print $Book1->print() . '<br>';


// Digital Book
$Book2 = new DigitalBook('Alice in Wonderland', 'Lewis Carrol', 5500, 3030);
print $Book2->print();