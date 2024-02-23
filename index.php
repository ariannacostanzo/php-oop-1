<?php 

//*classi
class Movie 
{
    public $id;
    public $title;
    public $description;
    public $director;
    
    public function __construct($id, $title, $description, Director $director)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->director = $director;
    }

    public function getDirectorName()
    {
        return $this->director->name;
    }
}

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

//* variabili
$movie1_title = 'Il signore degli anelli';
$movie1_description = "Il Signore degli Anelli (The Lord of the Rings) è una trilogia colossal fantasy co-scritta, diretta e co-prodotta dal regista neozelandese Peter Jackson, basata sull'omonimo romanzo scritto da J. R. R. Tolkien. La serie è formata da Il Signore degli Anelli - La Compagnia dell'Anello (2001), Il Signore degli Anelli - Le due torri (2002) e Il Signore degli Anelli - Il ritorno del re (2003).";
$movie2_title = 'Titanic';
$movie2_description = "Titanic è un film colossal del 1997 diretto, scritto, prodotto e co-montato da James Cameron.La pellicola è un colossal epico-romantico[2][3][4] di carattere storico, interpretato da Leonardo DiCaprio e Kate Winslet nei ruoli di Jack e Rose, due membri di classi sociali opposte che si innamorano a bordo della sfortunata nave RMS 'Titanic', realmente naufragata il 15 aprile 1912, durante il suo viaggio inaugurale, a seguito dello schianto contro un iceberg.";

$director_1_name = "Peter Jackson";
$director_1_age = 62;
$director_2_name = "James Cameron";
$director_2_age = 69;

//* istanze

$director_1 = new Director(uniqid(), $director_1_name, $director_2_age);
$director_2 = new Director(uniqid(), $director_2_name, $director_2_age);

$movie1 = new Movie(uniqid(), $movie1_title, $movie1_description, $director_1);
$movie2 = new Movie(uniqid(), $movie2_title, $movie2_description, $director_2);

//* mostro in pagina 
echo $movie1->getDirectorName();
echo $movie2->getDirectorName();