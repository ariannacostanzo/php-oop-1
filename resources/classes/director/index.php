<?php  
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