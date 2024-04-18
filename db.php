<?php

require_once __DIR__ . '/Models/Production.php';

// create an object
$book = new Production('ciao', 'italiano', 153);
$movie = new Production('Dune', 'English', 8);

// add objects to the array
$products[] = $book;
$products[] = $movie;
