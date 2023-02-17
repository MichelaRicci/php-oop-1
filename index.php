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
        echo $this->title.$this->year.$this->language.$this->genre.$this->director;
    }

};


$back_to_the_future = new Movie('Back to the Future', 1985,'english', 'sci-fi', 'Robert Zemeckis');
$back_to_the_future_2 = new Movie('Back to the Future Part II', 1989,'english', 'sci-fi', 'Robert Zemeckis');
$back_to_the_future_3 = new Movie('Back to the Future Part III', 1990,'english', 'sci-fi', 'Robert Zemeckis');


$back_to_the_future -> printMovie();
$back_to_the_future_2 -> printMovie();
$back_to_the_future_3 -> printMovie();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movie</title>
</head>
<body>
    
</body>
</html>