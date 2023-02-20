<?php
include __DIR__ . '/data/data.php';
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

        <?php foreach ($movies as $movie) : ?>
            <h4 class="mt-3">
                <?= $movie->title ?>
            </h4>
            <ul class="list-group">
                <li>Year: <?= $movie->year ?></li>
                <li>Language: <?= $movie->language ?></li>
                <li>Genre: <?= $movie->genre ?></li>
                <li>Director: <?= $movie->director ?></li>
            </ul>

        <?php endforeach; ?>

    </div>
  
    
</body>
</html>