<?php
class Movie {
    public $title;
    public $overview;
    public $vote;
    public $lang;
    public $genres;
    public $casts;

    function __construct($_title, $_overview, $_vote, $_lang)
    {
        $this->title = $_title;
        $this->overview = $_overview;
        $this->vote = $_vote;
        $this->lang = $_lang; 
    }

    public function setGenres($_genArray)
    {
        // for ($i = 0; $i < count($_genArray); $i++) {
        //     $this->genres[] = $_genArray[$i];
        // };

        $this->genres = $_genArray;
    }
    
    public function setCasts($_arrCasts)
    {
        $this->casts = $_arrCasts;
    }

    public function getData($_data)
    {
        if ($_data === 'genres') {
            return $this->genres;
        } else if ($_data === 'casts') {
            return $this->casts;
        }
    }
}

// FILM 1
$overviewFilm1 = 'A 11 anni, Harry Potter scopre di essere il figlio orfano di due potenti maghi. Frequenta la scuola di magia e stregoneria di Hogwarts dove scopre la verità su se stesso e sulla morte dei suoi genitori.';
$film1 = new Movie('Harry Potter', $overviewFilm1, 5, 'IT');

// $myGenres = ['avventura', 'azione', 'drammatico'];
// $provaFilm->setGenres($myGenres);

$film1->setGenres(['Avventura', 'Azione', 'Drammatico']);
$film1->setCasts(['Daniel Radcliffe', 'Rupert Grint', 'Emma Watson']);
// var_dump($film1); // DEBUG
// var_dump($film1->getData('genres')); // DEBUG
// var_dump($film1->getData('casts')); // DEBUG

// FILM 2
$overviewFilm2 = 'La storia del leader carismatico Steve Jobs, dal college all\'invenzione del computer costruito nel garage dei genitori, fino alla creazione di un impero che ha rivoluzionato il mondo.';
$film2 = new Movie('Jobs', $overviewFilm2, 5, 'IT');
$film2->setGenres(['Biografico', 'Drammatico']);
$film2->setCasts(['Ashton Kutcher', 'Josh Gad', 'Lukas Haas', 'Eddie Hassell']);

$myFilm = [$film1, $film2];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Film</title>
    <link rel="stylesheet" href="style/index.css">
</head>
<body>
    <?php foreach ($myFilm as $film) {?>
        <div class="films-container">
            <div class="film">
                <div class="title-vote">
                    <h1><?= $film->title ?></h1>
                    <span><?php
                        for ($i = 0; $i < $film->vote; $i++) {
                            echo '⭐️';
                        }?></span>
                </div>
                <p class="overview"><?= $film->overview ?></p>
                <div class="genres">
                    <span>Genere:</span><?php
                    foreach ($film->genres as $genre) {?>
                        <span class="genre"><?= $genre ?></span><?php
                    }?>
                </div>
                <div class="casts">
                <span>Cast:</span><?php
                    foreach ($film->casts as $actor) {?>
                        <span class="actors"><?= $actor ?></span><?php
                    }?>
                </div>
            </div>
        </div>
    <?php
    } ?>
    
</body>
</html>