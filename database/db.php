<?php

require_once __DIR__ . '/../Models/Production.php';
require_once __DIR__ . '/../Models/Genre.php';
require_once __DIR__ . '/../Models/Movie.php';
require_once __DIR__ . '/../Models/TVSerie.php';

// create an object
// add genre inside the Production object creation
$divina_commedia = new Production('Divina Commedia', 'italiano', 153, new Genre("It's funny"));
$divina_commedia->genre->setGenre('Comic');

// create an object
//create the genre and saved as a variable to use in the Production object creation
$dune_genre = new Genre('there is a lot of action');
$dune = new Production('Dune', 'English', 8, $dune_genre);
$dune->genre->setGenre('Sci-Fy');

// add objects to the array
$products[] = $divina_commedia;
$products[] = $dune;

// create movies instaces and add genres

$rebel_moon = new Movie('Rebel Moon', 'english', -5, new Genre('there are fights in the space'), 100000, 134);
$rebel_moon->genre->setGenre('Sci-Fy');
$rebel_moon->genre->setGenre('Drama');
$rebel_moon->genre->setGenre('Action');
$joker = new Movie('Joker', 'english', 8, new Genre('is the story of joker'), 900000000, 122);
$joker->genre->setGenre('Crime');
$joker->genre->setGenre('Thriller');
$joker->genre->setGenre('Drama');

// create tvseries instances and add genres

$boris = new TVSerie('Boris', 'italian', 15, new Genre('a lot of laught in the making of tv fiction'), 4);
$boris->genre->setGenre('Comedy');
$fallout = new TVSerie('Fallout', 'english', 8, new Genre('adventure in a post-apocalyctic world'), 1);
$fallout->genre->setGenre('Action & Adventure');
$fallout->genre->setGenre('Sci-Fy');
$fallout->genre->setGenre('Mistery');

// add all to products

$products[] = $rebel_moon;
$products[] = $joker;
$products[] = $boris;
$products[] = $fallout;

// encode the file as a json to make it readeble by the front-end
$json_products = json_encode($products);
header('Content-Type: application/json');
echo $json_products;
