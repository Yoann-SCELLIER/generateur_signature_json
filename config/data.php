<?php

// mais en relation avec les autres fichiers "$_SESSION"
session_start();

// création d"une variable qui reprend un tableau multidimensionnel associatif
$_SESSION["users"] = array(
    array("id" => 1, "prenom" => "Yoann", "nom" => "Scellier", "poste1" => "Dev 1", "poste2" => "Dev 2", "numero" => "0606060606", "mail" => "Yoann@gmail.com") // je prépare un tableau vierge pour définir une structure.    
); 