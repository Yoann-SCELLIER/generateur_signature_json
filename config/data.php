<?php

// mais en relation avec les autres fichiers '$_SESSION'
session_start();

// création d'une variable qui reprend un tableau multidimensionnel associatif
$_SESSION['users'] = array(
    array('id' => '', 'prenom' => '', 'nom' => '', 'poste1' => '', 'poste2' => '', 'numero' => '', 'mail' => '') // je prépare un tableau vierge pour définir une structure.    
); 