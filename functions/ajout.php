<?php

// mais en relation avec les autres fichiers "$_SESSION"
session_start();

$id = ajout();

// création de variable
$prenom = $_POST["prenom"];
$nom = $_POST["nom"];
$poste1 = $_POST["poste1"];
$poste2 = $_POST["poste2"];
$numero = $_POST["numero"];
$mail = $_POST["mail"];

// création d'une variable qui reprend les éléments d'un tableau
$newUsers = array("prenom" => $prenom, "nom" => $nom, "poste1" => $poste1, "poste2" => $poste2, "numero" => $numero, "mail" => $mail);

// création d'un "function" pour ajouter un "id" différent du tableau
function ajout(){
    
    // création d'une variable qui démarre à 5 (élément près défini dans le tableau)
    $id = $_SESSION['users']['id'];
    
    // création d'une boucle
    foreach($_SESSION['users'] as $user){
        if($user['id'] > $id){
            $id = $user['id'];
        }
    }
    $id++;
    return $id;
}

// envoie les nouveau éléments dans le tableau
array_push ($_SESSION['users'], $newUsers);

// redirige dans "index" après envoi du nouveau fichier
header('Location: /generateur_json/index.php'); // Redirection sur la page d'accueil