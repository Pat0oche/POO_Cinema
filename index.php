<?php
function chargerClasse($classe){
    require $classe . '.php';
    }
spl_autoload_register('chargerClasse');

// ajouter les tostring dans les classes