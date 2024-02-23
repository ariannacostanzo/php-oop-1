<?php 

//*classi

require_once __DIR__ . '/resources/classes/actor/index.php';
require_once __DIR__ . '/resources/classes/director/index.php';
require_once __DIR__ . '/resources/classes/movie/index.php';


//* istanze

require __DIR__ . './resources/istances/istances.php';

$movies = [$movie1, $movie2]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>I film di oggi sono:</h1>
    <?php foreach( $movies as $movie ) : ?>
    <div>
        <h2><?= $movie->title ?></h2>
        <h3>Descrizione: </h3>
        <p><?= $movie->description ?></p>
        <p><strong>Direttore:</strong> <span><?= $movie->getDirectorName() ?></span> </p>
        <p><strong>Attori principali:</strong> 
            <!-- lego i singoli attori con la virgola e poi metto punto alla fine. -->
            <?= implode(', ', array_map(fn($actor) => $actor->name, $movie->actors)) ?>.
        </p>
    </div>
    <?php endforeach ?>

</body>
</html>