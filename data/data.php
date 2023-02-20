<?php

require_once __DIR__ . '/../model/movie.php';
require_once __DIR__ . '/../model/genre.php';

$back_to_the_future = new Movie('Back to the Future', 1985,'english', 'sci-fi', 'Robert Zemeckis');
$back_to_the_future_2 = new Movie('Back to the Future Part II', 1989,'english', 'sci-fi', 'Robert Zemeckis');
$back_to_the_future_3 = new Movie('Back to the Future Part III', 1990,'english', [new Genre('sci-fi'), new Genre('western')], 'Robert Zemeckis');

$movies = [$back_to_the_future, $back_to_the_future_2, $back_to_the_future_3];

?>