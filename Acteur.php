<?php
class Acteur extends Personne {
    private array $_casting;

    public function __construct(string $prenom, string $nom, string $genre, string $dateNaissance){
        parent::__construct($prenom, $nom, $genre, $dateNaissance);
        $this->_casting = [];
        
    }


    /**
     * Get the value of _casting
     */ 
    public function get_casting()
    {
        return $this->_casting;
    }

    /**
     * Set the value of _casting
     *
     * @return  self
     */ 
    public function set_casting($_casting)
    {
        $this->_casting = $_casting;

        return $this;
    }
}