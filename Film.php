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
        $this->_realisateur->ajouterFilm($this);
        $this->_synopsis = $synopsis;
        $this->_casting = [];
        $this->_genre = $genre;
        $this->_genre->ajouterFilm($this);
    }
    public function __toString()
    {
        return $this->_titre;
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
        $minutes = $this->_duree;
        $hours = mktime(0, $minutes);

        $fmt = new IntlDateFormatter("fr_FR",
                IntlDateFormatter::FULL,
                IntlDateFormatter::FULL,
                'Europe/Paris',
                IntlDateFormatter::GREGORIAN,
                "HH:mm");

        return $fmt->format($hours);
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

    public function ajouterCasting(Casting $casting){
        $this->_casting[] = $casting;
    }

    public function afficherCasting() {
        echo "<h2>Casting de ".$this."</h2>";
        foreach ($this->_casting as $casting) {
            echo $casting."<br>";
        }
    }

    public function afficherInfos() {
        $result = "<h2>Détails de ".$this."</h2>";
        $result .= "
        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Durée</th>
                    <th>Date de sortie</th>
                    <th>Réalisateur</th>
                    <th>Genre</th>
                    <th>Synopsis</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>".$this->_titre."</td>
                    <td>".$this->get_duree()."</td>
                    <td>".$this->_dateSortieFR->format("d / m /Y")."</td>
                    <td>".$this->_realisateur."</td>
                    <td>".$this->_genre."</td>
                    <td width='50%'>".$this->_synopsis."</td>
                </tr>
            </tbody>
        </table>";

        $result .= "<h3>Casting</h3><ul>";
        foreach ($this->_casting as $casting) {
            $result .= "<li>".$casting."</li>";
        }
        $result .= "</ul>";
        return $result;
    }
}
