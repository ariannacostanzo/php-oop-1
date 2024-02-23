<?php 

//*classi

//? MOVIE
class Movie 
{
    public $id;
    public $title;
    public $description;
    public $director;
    public $actors;
    
    public function __construct($id, $title, $description, Director $director, array $actors)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->director = $director;
        $this->actors = $actors;
    }

    public function getDirectorName()
    {
        return $this->director->name;
    }
}
//? DIRECTOR
class Director
{
    public $id;
    public $name;
    public $age;

    public function __construct($id, $name, $age)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
    }
}

//? ACTOR

class Actor
{
    public $id;
    public $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}

//* variabili


$director_1_name = "Peter Jackson";
$director_1_age = 62;
$director_2_name = "James Cameron";
$director_2_age = 69;

$movie1_title = 'Il signore degli anelli';
$movie1_description = "Il Signore degli Anelli (The Lord of the Rings) è una trilogia colossal fantasy co-scritta, diretta e co-prodotta dal regista neozelandese Peter Jackson, basata sull'omonimo romanzo scritto da J. R. R. Tolkien. La serie è formata da Il Signore degli Anelli - La Compagnia dell'Anello (2001), Il Signore degli Anelli - Le due torri (2002) e Il Signore degli Anelli - Il ritorno del re (2003).";

$movie1_actor1_name = 'Elijah Wood';
$movie1_actor2_name = 'Viggo Mortensen';
$movie1_actor3_name = 'Ian McKellen';

$movie2_title = 'Titanic';
$movie2_description = "Titanic è un film colossal del 1997 diretto, scritto, prodotto e co-montato da James Cameron.La pellicola è un colossal epico-romantico[2][3][4] di carattere storico, interpretato da Leonardo DiCaprio e Kate Winslet nei ruoli di Jack e Rose, due membri di classi sociali opposte che si innamorano a bordo della sfortunata nave RMS 'Titanic', realmente naufragata il 15 aprile 1912, durante il suo viaggio inaugurale, a seguito dello schianto contro un iceberg.";

$movie2_actor1_name = 'Kate Winslet';
$movie2_actor2_name = 'Leonardo DiCaprio';
$movie2_actor3_name = 'Kathy Bates';


//* istanze

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

//* mostro in pagina 
var_dump($movie1);
var_dump($movie2);