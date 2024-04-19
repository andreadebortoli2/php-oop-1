<?php
require_once __DIR__ . '/Production.php';

class TVSerie extends Production
{
    public $type = 'TVSerie';

    public function __construct(string $title, string $language, int $vote, Genre $genre, public int $seasons)
    {
        parent::__construct($title, $language, $vote, $genre);
    }
}
