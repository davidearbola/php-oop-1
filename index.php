<?php

include __DIR__ . "/models/Movie.php";
include __DIR__ . "/data/store.php"

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP OOP</title>
</head>

<body>
    <?php include __DIR__ . "/header.php" ?>
    <div class="d-flex flex-wrap justify-content-around">
        <?php foreach ($movieList as $movie) { ?>
            <?php include __DIR__ . "/card.php" ?>
        <?php } ?>
    </div>
</body>

</html>