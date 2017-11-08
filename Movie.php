<?php

Class Movie
{
    private $name = 'Movie s name';
    private $description = 'Movie s description';
    private $duration = 120;
    private $year = 1997;
    
    public function __construct($name, $description, $duration, $year)
    {
        $this->name = $name;
        $this->description = $description;
        $this->duration = $duration;
        $this->year = $year;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name = "")
    {
        $this->name = $name;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescription($description = "")
    {
        $this->description = $description;
    }
    
    public function getDuration()
    {
        return $this->duration;
    }
    
    public function setDuration($duration = 0)
    {
        $this->duration = $duration;
    }
    
    public function getYear()
    {
        return $this->year;
    }
    
    public function setYear($year = 2000)
    {
        $this->year = $year;
    }
}

$M1 = new Movie("Star Wars", "the last jedi", 163, 2017);

echo $M1->getName();