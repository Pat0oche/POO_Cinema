<?php
function chargerClasse($classe){
    require $classe . '.php';
    }
spl_autoload_register('chargerClasse');

// Acteurs

$harisonFord = new Acteur("Harison", "FORD", "Homme", "1942/07/13");
$markHamill = new Acteur("Mark", "Hamill", "Homme", "1951/09/25");
$aldenEhrenreich = new Acteur("Alden", "EHRENREICH", "Homme", "1989/11/22");

// Réalisateurs

$georgesLucas = new Realisateur("Georges", "LUCAS", "Homme", "1944/05/14");
$ronHoward = new Realisateur("Ron", "HOWARD", "Homme", "1954/03/01");
$spielberg = new Realisateur("Steven", "SPIELBERG", "Homme", "1946/12/18");

// Genres
$sf = new Genre("Science Fiction");
$aventure = new Genre("Aventure");

// Films
$starWars = new Film("Star Wars, épisode IV : Un nouvel espoir","1977/10/19", 121, $georgesLucas,
                     "Il y a bien longtemps, dans une galaxie très lointaine... La guerre civile 
                     fait rage entre l'Empire galactique et l'Alliance rebelle. Capturée par les 
                     troupes de choc de l'Empereur menées par le sombre et impitoyable Dark Vador, 
                     la princesse Leia Organa dissimule les plans de l'Etoile Noire, une station 
                     spatiale invulnérable, à son droïde R2-D2 avec pour mission de les remettre au 
                     Jedi Obi-Wan Kenobi. Accompagné de son fidèle compagnon, le droïde de protocole 
                     C-3PO, R2-D2 s'échoue sur la planète Tatooine et termine sa quête chez le jeune 
                     Luke Skywalker. Rêvant de devenir pilote mais confiné aux travaux de la ferme, 
                     ce dernier se lance à la recherche de ce mystérieux Obi-Wan Kenobi, devenu ermite 
                     au coeur des montagnes désertiques de Tatooine...", $sf);

$solo = new Film("SOLO : A Star Wars Sory", "2018/05/23", 135, $ronHoward, "Embarquez à bord du Faucon
				 Millenium et partez à l’aventure en compagnie du plus célèbre vaurien de la galaxie. 
				 Au cours de périlleuses aventures dans les bas-fonds d’un monde criminel, Han Solo 
				 va faire la connaissance de son imposant futur copilote Chewbacca et croiser la route 
				 du charmant escroc Lando Calrissian… Ce voyage initiatique révèlera la personnalité 
				 d’un des héros les plus marquants de la saga Star Wars.", $sf);

$indiana1 = new Film ("Les aventurires de l'arche perdue","1981/09/16", 116, $spielberg, "1936. Parti 
					à la recherche d'une idole sacrée en pleine jungle péruvienne, l'aventurier Indiana 
					Jones échappe de justesse à une embuscade tendue par son plus coriace adversaire : 
					le Français René Belloq.<br>
					Revenu à la vie civile à son poste de professeur universitaire d'archéologie, il est 
					mandaté par les services secrets et par son ami Marcus Brody, conservateur du National 
					Museum de Washington, pour mettre la main sur le Médaillon de Râ, en possession de son 
					ancienne amante Marion Ravenwood, désormais tenancière d'un bar au Tibet.<br>
					Cet artefact égyptien serait en effet un premier pas sur le chemin de l'Arche d'Alliance, 
					celle-là même où Moïse conserva les Dix Commandements. Une pièce historique aux pouvoirs 
					inimaginables dont Hitler cherche à s'emparer...", $aventure);

// Rôles

$hanSolo = new Role("Han Solo");
$lukeSkywalker = new Role("Luke Skywalker");
$indianaJones = new Role("Indiana Jones");


// Castings

$castStarWarsHF = new Casting($harisonFord, $hanSolo, $starWars);
$castStarWarsMH = new Casting($markHamill, $lukeSkywalker, $starWars);
$castSoloRH = new Casting($aldenEhrenreich, $hanSolo, $solo);
$castIndiana1HF = new Casting($harisonFord, $indianaJones, $indiana1);

$starWars->afficherCasting();
$solo->afficherCasting();

$hanSolo->listerRoles();

$sf->listerFilms();

$harisonFord->filmographieActeur();

$georgesLucas->filmographieReal();
