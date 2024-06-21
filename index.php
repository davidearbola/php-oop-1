<?php

class Movie
{
    public $titolo;
    public $descrizione;
    public $lingua;
    public $durata;
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

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>

<body>

    <h3><?= "Titolo: $fastAndFurios->titolo" ?></h3>
    <p><?= "Descrizione: $fastAndFurios->descrizione" ?></p>
    <span><?= "Lingua: $fastAndFurios->lingua | Durata: $fastAndFurios->durata" ?></span>

    <h3><?= "Titolo: $ilPadrino->titolo" ?></h3>
    <p><?= "Descrizione: $ilPadrino->descrizione" ?></p>
    <span><?= "Lingua: $ilPadrino->lingua | Durata: $ilPadrino->durata" ?></span>

    <h3><?= "Titolo: $gomorra->titolo" ?></h3>
    <p><?= "Descrizione: $gomorra->descrizione" ?></p>
    <span><?= "Lingua: $gomorra->lingua | Durata: $gomorra->durata" ?></span>

</body>

</html>