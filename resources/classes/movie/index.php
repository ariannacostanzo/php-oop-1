<?php  

require_once __DIR__ ."/../director/index.php";

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

