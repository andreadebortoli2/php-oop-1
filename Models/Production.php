<?php

//class declaration
class Production
{
    public $title;
    public $language;
    public $vote;
    public $genre;

    public function setVote($n)
    {
        // check if the vote is between 1 and 10
        if ($n > 0  && $n < 11) {
            $this->vote = $n;
        }
    }

    //constructor function
    public function __construct(string $title, string $language, int $vote, Genre $genre)
    {
        $this->title = $title;
        $this->language = $language;
        $this->setVote($vote);
        $this->genre = $genre;
    }
}
