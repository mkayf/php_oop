<?php

require '16_baseClass.php';

$song = new Song('Tere Bin', 1500);

$song->setRating(4.5);

print $song->getRating();
