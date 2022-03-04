<?php
class Role {
    private string $_role;
    private array $_casting;

    public function __construct(string $role){
        $this->_role = $role;
        $this->_casting = [];
    }
    public function __toString()
    {
        return $this->_role;
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

    public function ajouterCasting(Casting $casting){
        $this->_casting[] = $casting;
    }

    public function listerRoles() {
        echo "<h2>Liste des acteurs ayant incarnés ".$this."</h2>";
        foreach ($this->_casting as $casting) {
            echo $casting->get_acteur()." (".$casting->get_film().")<br>";
        }
    }
}