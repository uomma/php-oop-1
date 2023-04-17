<?php

class Movie{

    //variabili
    public $titolo;
    public $genere;
    public $durata;
    public static $paese = 'usa';

    //costruttore
    function __construct(string $_titolo, string $_genere, int $_durata)
    {
        $this->titolo = $_titolo;
        
    }
   /*  //metodo
    public function  smt (){
        return smt;
    } */

}   
$Batman = new Movie('Batman', 'Azione', '120' );
echo Movie ::$paese;

 var_dump($Movie);    
 
