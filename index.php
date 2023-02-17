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
}


$back_to_the_future = new Movie('Back to the Future', 1985,'english', 'sci-fi', 'Robert Zemeckis');

var_dump($back_to_the_future);


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