<?php

require_once '13_parent_class.php';
require_once '14_child_class.php';

$youngStunners = new Playlist;

$song1 = new Song('Laga Reh', 1200);
$song2 = new Song('Gumaan', 2600);


$youngStunners->addSongs($song1);
$youngStunners->addSongs($song2);

var_dump($youngStunners->getSongs());
