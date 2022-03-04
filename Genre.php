<?php
class Genre {

    private string $_genre;

    public function __construct(string $genre){
        $this->_genre = $genre;
        
    }
    public function __toString()
    {
        return $this->_genre;
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