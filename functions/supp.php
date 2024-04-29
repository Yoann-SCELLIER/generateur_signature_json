<?php

// mais en relation avec les autres fichiers "$_SESSION"
session_start();

// création d'une variable qui récupére l'ID de la URL
$idUser = $_GET['id'];


// création d'une boucle pour parcourir le tableau $_SESSION et assigner chaque élément à $user
foreach ($_SESSION['users'] as $user) {
    
    // "SI" $user['id'] et identique $iduser et égale
    if ($user['id'] == $idUser) {
        
        
        // array_splice($_SESSION['users'][$index], $user, 1);
        $index = array_search($user, $_SESSION['users']);

        // "ALORS" supprime l'élément
        // explication : array_splice( tableau,clé,longeur);
        array_splice($_SESSION['users'],$index,1 );
        
    }    

    // redirection vers l'index
    header('Location: /generateur_json/index.php'); // Redirection sur la page d'accueil
}
