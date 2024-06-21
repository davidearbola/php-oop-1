<?php

class Movie
{
    public $titolo;
    public $descrizione;
    public $lingua;
    public $durata;

    public function __construct($titolo, $descrizione, $lingua, $durata)
    {
        $this->titolo = $titolo;
        $this->descrizione = $descrizione;
        $this->lingua = $lingua;
        $this->durata = $durata;
    }
}
