<?php

// create the genre class
class Genre
{
    public $genreArray = array();

    // PHP8 syntax
    public function __construct(public string $genre_name, public string $description)
    {
        array_push($this->genreArray, $genre_name);
    }

    public function setGenre($genre_name)
    {
        array_push($this->genreArray, $genre_name);
    }
}
