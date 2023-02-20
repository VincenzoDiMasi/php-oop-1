
<?php

class Movie
{

    public $title;
    public $genre;
    public $language;
    public $overview;

    public function __construct($_title, Genre $_genre, $_language, $_overview)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->language = $_language;
        $this->overview = $_overview;
    }

     public function getFullGenre()
     {
         return "{$this->genre->primary} {$this->genre->secondary}";
     }
}
;

class Genre
{
    public $primary;
    public $secondary;

    public function __construct($_primary, $_secondary)
    {
        $this->primary = $_primary;
        $this->secondary = $_secondary;
    }

}

$fantasy_epic = new Genre(
    'Fantasy',
    'Epic'
);
$fantasy_magic = new Genre(
    'Fantasy',
    'Magic'
);

$lotr = new Movie(
    'Il signore degli anelli',
    $fantasy_epic,
    'Italiano',
    'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus assumenda dolores, sit ullam commodi perspiciatis expedita! Tenetur quae laudantium unde praesentium, reprehenderit repellendus illum molestias ducimus neque porro! Quas, nam'
);

$harry_potter = new Movie(
    'Harry Potter e la pietra filosofale',
    $fantasy_magic,
    'Italiano',
    'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus assumenda dolores, sit ullam commodi perspiciatis expedita! Tenetur quae laudantium unde praesentium, reprehenderit repellendus illum molestias ducimus neque porro! Quas, nam'

);



$movie_objects = [$lotr, $harry_potter];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>OOP-1</title>
</head>

<body>
    <div class="container">
        <h1 class='text-center'>Movies</h1>
        <?php foreach ($movie_objects as $movie): ?>
            <ul>
                <li>
                    <?= $movie->title ?>
                </li>
                <li>
                    <?= $movie->getFullGenre() ?>
                </li>
                <li>
                    <?= $movie->language ?>
                </li>
                <li>
                    <?= $movie->overview ?>
                </li>
            </ul>
        <?php endforeach; ?>
    </div>
</body>

</html>