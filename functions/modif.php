<?php

// mais en relation avec les autres fichiers "$_SESSION"
session_start();

// création de variable qui serons rappelé
$urlId = $_POST['id'];

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$poste1 = $_POST['poste1'];
$poste2 = $_POST['poste2'];
$numero = $_POST['numero'];
$mail = $_POST['mail'];

$newUsers = array("prenom" => $prenom, "nom" => $nom, "poste1" => $poste1, "poste2" => $poste2, "numero" => $numero, "mail" => $mail);

foreach ($_SESSION['users'] as $user) {

    if ($user['id'] == $urlId) {

        $index = array_search($user, $_SESSION['users']);
        $_SESSION['users'][$index] = array_replace($user, $newUsers);
    }
}


header('Location: /generateur_json/index.php'); // Redirection sur la page d'accueil