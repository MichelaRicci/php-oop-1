<?php

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
        return "$this->title.$this->year.$this->language.$this->genre.$this->director";
    }

};

class Genre 
{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

}


$back_to_the_future = new Movie('Back to the Future', 1985,'english', 'sci-fi', 'Robert Zemeckis');
$back_to_the_future_2 = new Movie('Back to the Future Part II', 1989,'english', 'sci-fi', 'Robert Zemeckis');
$back_to_the_future_3 = new Movie('Back to the Future Part III', 1990,'english', [new Genre('sci-fi'), new Genre('western')], 'Robert Zemeckis');




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>PHP Movie</title>
</head>
<body>
    <div>
        <h1>Movies</h1>

        <h4 class="mt-3">
            <?= $back_to_the_future->title ?>
        </h4>

        <ul class="list-group">
            <li>Year: <?= $back_to_the_future->year ?></li>
            <li>Language: <?= $back_to_the_future->language ?></li>
            <li>Genre: <?= $back_to_the_future->genre ?></li>
            <li>Director: <?= $back_to_the_future->director ?></li>
        </ul>


        <h4 class="mt-3">
            <?= $back_to_the_future_2->title ?>
        </h4>

        <ul class="list-group">
            <li>Year: <?= $back_to_the_future_2->year ?></li>
            <li>Language: <?= $back_to_the_future_2->language ?></li>
            <li>Genre: <?= $back_to_the_future_2->genre ?></li>
            <li>Director: <?= $back_to_the_future_2->director ?></li>
        </ul>


        <h4 class="mt-3">
            <?= $back_to_the_future_3->title ?>
        </h4>

        <ul class="list-group">
            <li>Year: <?= $back_to_the_future_3->year ?></li>
            <li>Language: <?= $back_to_the_future_3->language ?></li>
            <li>Genre: <?= $back_to_the_future_3->genre->name ?></li>
            <li>Director: <?= $back_to_the_future_3->director ?></li>
        </ul>
    </div>
  
    
</body>
</html>