<?php
include_once __DIR__.'./classes/Movie.php';

$films = [
    [
        'nome' => 'Pasta Al Tonno',
        'genere' => 'horror',
        'regista' => 'Antonio Zaghi',
        'trama'=> 'Tonno ha undici anni e un superpotere: un\'enorme  forza mentale, capace di scatenare tempeste di fuoco.'
    ],
    [
        'nome' => 'Pirati del Mediterraneo',
        'genere' => 'azione',
        'regista' => 'Giuliano Cretella',
        'trama'=> ' Giuliano ha una missione: distruggere i licantropi.'
    ],
    [
        'nome' => 'Harry Pitter',
        'genere' => 'azione',
        'regista' => 'Clelia ',
        'trama'=> 'La storia è nota. All\'inizio del secolo un archeologo scopre in Egitto la tomba di un Faraone, Talos.'
    ],
    [
        'nome' => 'Il Signore degli orecchini',
        'genere' => 'fantascienza',
        'regista' => 'Trevor',
        'trama'=> 'Trevor è una donna molto solitaria che vive in una tranquilla cittadina dell’Ohio.'
    ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    foreach($films as $key => $film){
        $mioFilm = new Movie($film['nome'], $film['genere'],$film['regista'],$film['trama'],);
    ?>

    <h1>Nome Film: <?php echo $mioFilm->getName() ?> </h1>
    <h3>Genere: <?php echo $mioFilm->getGenre() ?> </h3>
    <h4>Nome Regista: <?php echo $mioFilm->getRegista() ?> </h4>
    <p>Trama: <?php echo $mioFilm->getTrama() ?> </p>
    <?php }
    ?>
</body>
</html>