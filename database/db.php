<?php

require_once __DIR__ . '/../Models/Production.php';
require_once __DIR__ . '/../Models/Genre.php';

// create an object
// add genre inside the Production object creation
$book = new Production('Divina Commedia', 'italiano', 153, new Genre('comic', "It's funny"));

// create an object
//create the genre and saved as a variable to use in the Production object creation
$movie_genre = new Genre('Action', 'there is a lot of action');
$movie = new Production('Dune', 'English', 8, $movie_genre);


// add objects to the array
$products[] = $book;
$products[] = $movie;

$json_products = json_encode($products);
header('Content-Type: application/json');
echo $json_products;
