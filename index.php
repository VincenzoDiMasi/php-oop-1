
<?php

class Movie
{
    public $title;
    public $genre;
    public $vote;
    public $overview;

    public function __construct($title, $genre, $vote = 0, $overview)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->vote = $vote;
        $this->overview = $overview;
    }
};