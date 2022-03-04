<?php
class Genre {

    private string $_genre;

    public function __construct(string $genre){
        $this->_genre = $genre;
        $this->_film = [];
        
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

    public function ajouterFilm(Film $film){
        $this->_film[] = $film;
    }

    public function listerFilms() {
        echo "<h2>Liste des Films du genre : ".$this."</h2>";
        echo"<ul>";
        $i=0;
        foreach ($this->_film as $film) {
            echo "<li>".$film."</li>";
            $i++;
        }
        echo "</ul>";
        echo "Soit un total de $i films.";
    }
    
}