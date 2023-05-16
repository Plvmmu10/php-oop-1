<?php

class Movie
{
    public $title;
    public $nationality;
    public $date;
    public $image;

    public $vote;

    /**
     * Summary of flags
     * @var array
     */
    private $flags = [
        'en',
        'fr'
    ];

    /**
     * Summary of __construct
     * @param mixed $title
     * @param mixed $nationality
     * @param mixed $date
     * @param mixed $image
     * @param mixed $vote
     */


    public function __construct(string $title, string $nationality, string $date, string $image, string $vote)
    {
        $this->title = $title;
        $this->nationality = $nationality;
        $this->date = $date;
        $this->image = $image;
        $this->vote = $vote;
    }


    public function getFlag()
    {
        if (in_array($this->nationality, $this->flags)) {
            return "<img src='img/$this->nationality.png' alt='$this->nationality'>";
        } else {
            return "<h5> Bandiera non disponibile </h5>";
        }
    }
}

$padrino = new Movie('Il Padrino', 'en', '1972-03-24
', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/r4gnMXoY1efvaolNDjn3nj4046S.jpg', '9.2');

$forrest = new Movie('Forrest Gump', 'fr', '1994-06-23
', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/pGZqc9jQ6F8klQZKm37NAAMH70o.jpg', '8.8');

$movies = array($padrino, $forrest);