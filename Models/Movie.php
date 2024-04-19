<?php
require_once __DIR__ . '/Production.php';

class Movie extends Production
{
    public $type = 'Movie';

    public function __construct(string $title, string $language, int $vote, Genre $genre, public int $profits, public int $movie_length)
    {
        parent::__construct($title, $language, $vote, $genre);
    }
}
