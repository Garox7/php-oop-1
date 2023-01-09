<?php
class Movie {
    public $title;
    public $overview;
    public $vote;
    public $lang;
    public $genres = [];
    public $casts = [];

    function __construct($_title, $_vote, $_lang) {
        $this->title = $_title;
        $this->vote = strval($_vote);
        $this->lang = $_lang; 
    }

    public function setGenres($_genArray) {
        for ($i = 0; $i < count($_genArray); $i++) {
            $this->genres[] = $_genArray[$i];
        }
    }
}

$provaFilm = new Movie('Harry Potter', 5, 'IT');
// $myGenres = ['avventura', 'azione', 'drammatico'];
$provaFilm->setGenres(['avventura', 'azione', 'drammatico']);
var_dump($provaFilm);

var_dump($provaFilm->genres)

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
    
</body>
</html>