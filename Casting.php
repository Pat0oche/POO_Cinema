<?php

class Casting {
    private Acteur $_acteur;
    private Role $_role;
    private Film $_film;

    public function __construct(Acteur $acteur, Role $role, Film $film){
        $this->_acteure = $acteur;
        $this->_role = $role;
        $this->_film = $film;
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
    public function set_acteur($_acteur)
    {
        $this->_acteur = $_acteur;

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
    public function set_role($_role)
    {
        $this->_role = $_role;

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
    public function set_film($_film)
    {
        $this->_film = $_film;

        return $this;
    }
}
