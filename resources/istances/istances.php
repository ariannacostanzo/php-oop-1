<?php  
//* CLASSES

require_once __DIR__ . '/../classes/movie/index.php';
require_once __DIR__ . '/../classes/actor/index.php';
require_once __DIR__ . '/../classes/director/index.php';

//* DATA
require_once __DIR__ . '/../data/data.php';

$director_1 = new Director(uniqid(), $director_1_name, $director_2_age);
$director_2 = new Director(uniqid(), $director_2_name, $director_2_age);
 
$movie1_actor1 = new Actor(uniqid(), $movie1_actor1_name);
$movie1_actor2 = new Actor(uniqid(), $movie1_actor2_name);
$movie1_actor3 = new Actor(uniqid(), $movie1_actor3_name);

$movie2_actor1 = new Actor(uniqid(), $movie2_actor1_name);
$movie2_actor2 = new Actor(uniqid(), $movie2_actor2_name);
$movie2_actor3 = new Actor(uniqid(), $movie2_actor3_name);

$movie1 = new Movie(uniqid(), $movie1_title, $movie1_description, $director_1, [$movie1_actor1, $movie1_actor2, $movie1_actor3]);
$movie2 = new Movie(uniqid(), $movie2_title, $movie2_description, $director_2, [$movie2_actor1, $movie2_actor2, $movie2_actor3]);

