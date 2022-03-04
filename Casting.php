<?php

class Casting {
    private Acteur $_acteur;
    private Role $_role;
    private Film $_film;

    public function __construct(Acteur $acteur, Role $role, Film $film){
        $this->_acteur = $acteur;
        $this->_role = $role;
        $this->_film = $film;
        $this->_acteur->ajouterCasting($this);
        $this->_role->ajouterCasting($this);
        $this->_film->ajouterCasting($this);
    }

    public function __toString()
    {
        return "Acteur : ".$this->_acteur.", Rôle : ".$this->_role;
    }
    /**
     * Get the value of _acteur
     */ 
    public function get_acteur()
    {
        return $this->_acteur;
    }

    /**
     * Set the value of _acteur
     *
     * @return  self
     */ 
    public function add_acteur(Acteur $acteur)
    {
        $this->_acteur[] = $acteur;

        return $this;
    }

    /**
     * Get the value of _role
     */ 
    public function get_role()
    {
        return $this->_role;
    }

    /**
     * Set the value of _role
     *
     * @return  self
     */ 
    public function add_role(Role $role)
    {
        $this->_role[] = $role;

        return $this;
    }

    /**
     * Get the value of _film
     */ 
    public function get_film()
    {
        return $this->_film;
    }

    /**
     * Set the value of _film
     *
     * @return  self
     */ 
    public function add_film(Film $film)
    {
        $this->_film[] = $film;

        return $this;
    }
}
