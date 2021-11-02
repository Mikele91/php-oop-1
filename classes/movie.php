<?php
class Movie{
    private $titolo;
    private $regista;
    private $anno;

    function __construct($_titolo,$_regista,$_anno)
        {
            $this->titolo = $_titolo;
            $this-> regista = $_regista;
            $this-> anno = $_anno;
    
        }
        public function getTitolo(){
            return  $this->titolo;
        
        }
        public function getRegista(){
            return  $this->regista;
        
        }
        public function getAnno(){
            return  $this->anno;
        
        }

}