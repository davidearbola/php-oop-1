<?php

class Movie
{
    public $titolo;
    public $descrizione;
    public $lingua;
    public $durata;

    public function getCard()
    {
        return "<h3>Titolo: {$this->titolo} </h3>
        <p>Descrizione: {$this->descrizione}</p>
        <span>Lingua: {$this->lingua} | Durata: {$this->durata}</span>";
    }
    public function __construct($titolo, $descrizione, $lingua, $durata)
    {
        $this->titolo = $titolo;
        $this->descrizione = $descrizione;
        $this->lingua = $lingua;
        $this->durata = $durata;
    }
}

$movieList = [
    new Movie('Fast & Furious', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, quam!', 'EN', '120 min'),
    new Movie('Il Padrino', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, quam!', 'EN', '180 min'),
    new Movie('Gomorra', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, quam!', 'IT', '100 min'),
]

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>

<body>
    <?php foreach ($movieList as $movie) {
        echo $movie->getCard();
    } ?>
</body>

</html>