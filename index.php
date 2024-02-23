<?php 

//*classi

require_once __DIR__ . '/resources/classes/actor/index.php';
require_once __DIR__ . '/resources/classes/director/index.php';
require_once __DIR__ . '/resources/classes/movie/index.php';


//* istanze

require __DIR__ . './resources/istances/istances.php';

//* mostro in pagina 
var_dump($movie1);
var_dump($movie2);
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
    <div>
        <h2><?= $movie1->title ?></h2>

    </div>
    <div>
        <h2><?= $movie2->title ?></h2>

    </div>
</body>
</html>