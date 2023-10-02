<?php      
class Movie{
    public $titolo;
    public $durata;
    public $genere;

    function __construct( string $titolo, float $durata ,string $genere ){
        $this->titolo =$titolo;
        $this->durata =$durata;
        $this->durata =$genere;

       
    }

    public function getDetails(){
        return "Titolo : $this->titolo <br> Durata $this->durata  <br> $this->genere " ;
    }

}




?>