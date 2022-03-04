<?php
class Film {
    private string $_titre;
    private DateTime $_dateSortieFR;
    private int $_duree;
    private Realisateur $_realisateur;
    private string $_synopsis;
    private array $_casting;
    private Genre $_genre;


    public function __construct(string $titre, string $dateSortieFR, int $duree, 
                                Realisateur $realisateur, string $synopsis, Genre $genre){
        $this->_titre = $titre;
        $this->_dateSortieFR = new DateTime($dateSortieFR);
        $this->_duree = $duree;
        $this->_realisateur = $realisateur;
        $this->_synopsis = $synopsis;
        $this->_casting = [];
        $this->_genre = $genre;
    }
    public function __toString()
    {
        return $this->_titre." de ".$this->_realisateur;
    }
    /**
     * Get the value of _titre
     */ 
    public function get_titre()
    {
        return $this->_titre;
    }

    /**
     * Set the value of _titre
     *
     * @return  self
     */ 
    public function set_titre($_titre)
    {
        $this->_titre = $_titre;

        return $this;
    }

    /**
     * Get the value of _dateSortieFR
     */ 
    public function get_dateSortieFR()
    {
        return $this->_dateSortieFR;
    }

    /**
     * Set the value of _dateSortieFR
     *
     * @return  self
     */ 
    public function set_dateSortieFR($_dateSortieFR)
    {
        $this->_dateSortieFR = $_dateSortieFR;

        return $this;
    }

    /**
     * Get the value of _duree
     */ 
    public function get_duree()
    {
        return $this->_duree;
    }

    /**
     * Set the value of _duree
     *
     * @return  self
     */ 
    public function set_duree($_duree)
    {
        $this->_duree = $_duree;

        return $this;
    }

    /**
     * Get the value of _realisateur
     */ 
    public function get_realisateur()
    {
        return $this->_realisateur;
    }

    /**
     * Set the value of _realisateur
     *
     * @return  self
     */ 
    public function set_realisateur($_realisateur)
    {
        $this->_realisateur = $_realisateur;

        return $this;
    }

    /**
     * Get the value of _synopsis
     */ 
    public function get_synopsis()
    {
        return $this->_synopsis;
    }

    /**
     * Set the value of _synopsis
     *
     * @return  self
     */ 
    public function set_synopsis($_synopsis)
    {
        $this->_synopsis = $_synopsis;

        return $this;
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
}