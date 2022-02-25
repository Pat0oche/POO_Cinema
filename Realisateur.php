<?php
class Realisateur extends Personne {
    private array $_films;

    public function __construct(string $prenom, string $nom, string $genre, string $dateNaissance){
        parent::__construct($prenom, $nom, $genre, $dateNaissance);
        $this->_films = [];
        
    }

    /**
     * Get the value of _films
     */ 
    public function get_films()
    {
        return $this->_films;
    }

    /**
     * Set the value of _films
     *
     * @return  self
     */ 
    public function set_films($_films)
    {
        $this->_films = $_films;

        return $this;
    }
}