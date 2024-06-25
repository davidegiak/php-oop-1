<?php

class Movie
{
    public $nome;
    public $durata;
    public $descrizione;

    public function __construct($nome, $durata, $descrizione)
    {
        $this->nome = $nome;
        $this->durata = $durata;
        $this->descrizione = $descrizione;
    }
    public function descrizione()
    {
        return $this->nome . $this->descrizione;
    }
}
$movies = [
    new Movie("Thor", "1:50:00", "blablablablabla"),
    new Movie("Ironman", "2:00:00", "Film della marvel molto bello" )
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <ul>
        <?php foreach ($movies as $film) { ?>
            <li><?= $film->descrizione() ?></li>
        <?php } ?>
    </ul>
</body>
</html>
