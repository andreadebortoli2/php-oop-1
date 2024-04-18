<?php

// create the genre class
class Genre
{
    // PHP8 syntax
    public function __construct(public string $name, public string $description)
    {
    }
}
