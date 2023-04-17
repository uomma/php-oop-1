<?php



class Movie{

    //variabili
    private $titolo;
    private $genere;
    private $durata;
    private static $paese = 'usa';

    //costruttore
    function __construct(string $_titolo, string $_genere, int $_durata)
    {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->durata = $_durata;

        
    }
   //metodo
    public function  get_movie_info (){
        return "titolo: {$this-> titolo}- genere: {$this-> genere}- durata:{$this -> durata}";
    } 

}   
/* echo Movie ::$paese;
 */
 
?>