<?php       
require_once __DIR__ .'./movie.php';
require_once __DIR__ .'./genere.php';



// $spaceGenere = new Genere("Fantasy-space");
// $horrorGenere = New Genere ("Horror");

$movie_1 = new Movie ('interstellar', 2,20 , 'space-fantasy');
$movie_2 = new Movie ('The Prestige', 2,35 , 'thriller/drama');


$movie_1 -> getDetails();
var_dump($movie_1 -> getDetails());

$movie_2 -> getDetails();
var_dump($movie_2 -> getDetails())

?>