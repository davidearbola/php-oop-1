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
}
$fastAndFurios = new Movie();
$fastAndFurios->titolo = 'Fast & Furious';
$fastAndFurios->descrizione = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, quam!';
$fastAndFurios->lingua = 'EN';
$fastAndFurios->durata = '120 minuti';

$ilPadrino = new Movie();
$ilPadrino->titolo = 'Il Padrino';
$ilPadrino->descrizione = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, quam!';
$ilPadrino->lingua = 'EN';
$ilPadrino->durata = '180 minuti';

$gomorra = new Movie();
$gomorra->titolo = 'Gomorra';
$gomorra->descrizione = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, quam!';
$gomorra->lingua = 'IT';
$gomorra->durata = '100 minuti';

$movieList = [$fastAndFurios, $ilPadrino, $gomorra];

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