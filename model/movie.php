<?php

require_once __DIR__ . '/genre.php';

class Movie 
{
    public $title;
    public $year;
    public $language;
    public $genre;
    public $director; 



    public function __construct($title, $year, $language, $genre, $director){
        $this->title = $title;
        $this->year = $year;
        $this->language = $language;
        $this->genre = $genre;
        $this->director = $director;
    }

    public function printMovie(){

        $genre_name = $this->genre->name;
        return "$this->title.$this->year.$this->language.$this->genre_name.$this->director";
    }

};

?>
