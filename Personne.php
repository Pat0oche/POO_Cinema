<?php
class Personne {
    protected string $_prenom;
    protected string $_nom;
    protected string $_genre;
    protected DateTime $_dateNaissance;

    public function __construct(string $prenom, string $nom, string $genre, string $dateNaissance){
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_genre = $genre;
        $this->_dateNaissance = new DateTime($dateNaissance);

    }

    public function __toString()
    {
        return $this->_prenom." ".$this->_nom;
    }

    /**
     * Get the value of _prenom
     */ 
    public function get_prenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of _prenom
     *
     * @return  self
     */ 
    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    /**
     * Get the value of _nom
     */ 
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of _nom
     *
     * @return  self
     */ 
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Get the value of _genre
     */ 
    public function get_genre()
    {
        return $this->_genre;
    }

    /**
     * Set the value of _genre
     *
     * @return  self
     */ 
    public function set_genre($_genre)
    {
        $this->_genre = $_genre;

        return $this;
    }

    /**
     * Get the value of _dateNaissance
     */ 
    public function get_dateNaissance()
    {
        return $this->_dateNaissance;
    }

    /**
     * Set the value of _dateNaissance
     *
     * @return  self
     */ 
    public function set_dateNaissance($_dateNaissance)
    {
        $this->_dateNaissance = $_dateNaissance;

        return $this;
    }
}