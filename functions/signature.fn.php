<?php

function supprimer()
{
    // mais en relation avec les autres fichiers '$_SESSION'
    session_start();

    // création d'une variable qui récupére l'ID de la URL
    $iduser = $_GET['id'];

    // création d'une boucle pour parcourir le tableau $_SESSION et assigner chaque élément à $user
    foreach ($_SESSION['users'] as $user) {

        // 'SI' $user['id'] et identique $iduser et égale
        if ($user['id'] == $iduser) {

            // array_splice($_SESSION['users'][$index], $user, 1);
            $index = array_search($user, $_SESSION['users']);

            // 'ALORS' supprime l'élément
            // explication : array_splice( tableau,clé,longeur);
            array_splice($_SESSION['users'], $index, 1);
        }
    }
}

function update()
{

    // mais en relation avec les autres fichiers '$_SESSION'
    session_start();

    // création de variable qui serons rappelé
    $urlId = $_POST['id'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $poste1 = $_POST['poste1'];
    $poste2 = $_POST['poste2'];
    $numero = $_POST['numero'];
    $mail = $_POST['mail'];

    $newUsers = array('prenom' => $prenom, 'nom' => $nom, 'poste1' => $poste1, 'poste2' => $poste2, 'numero' => $numero, 'mail' => $mail);

    foreach ($_SESSION['users'] as $user) {

        if ($user['id'] == $urlId) {

            $index = array_search($user, $_SESSION['users']);
            $_SESSION['users'][$index] = array_replace($user, $newUsers);
        }
    }
}

function add()
{

    // création de variable
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $poste1 = $_POST['poste1'];
    $poste2 = $_POST['poste2'];
    $numero = $_POST['numero'];
    $mail = $_POST['mail'];

    // création d'un 'function' pour ajouter un 'id' différent du tableau
    function ajout()
    {
        session_start();

        // création d'une variable qui démarre à 5 (élément près défini dans le tableau)
        $id = $_SESSION['users']['id'];

        // création d'une boucle
        foreach ($_SESSION['users'] as $user) {
            if ($user['id'] > $id) {
                $id = $user['id'];
            }
        }
        $id++;
        return $id;
    }

    // mais en relation avec les autres fichiers '$_SESSION'
    $id = ajout();

    // création d'une variable qui reprend les éléments d'un tableau
    $newUsers = array('id' => $id, 'prenom' => $prenom, 'nom' => $nom, 'poste1' => $poste1, 'poste2' => $poste2, 'numero' => $numero, 'mail' => $mail);

    // envoie les nouveau éléments dans le tableau
    array_push($_SESSION['users'], $newUsers);
}

function refreshAll()
{

    // mais en relation avec les autres fichiers '$_SESSION'
    session_start();

    // création d'une variable qui reprend un tableau multidimensionnel associatif
    $_SESSION['users'] = array(
        // Je laisse vide.
    );
}

function view() {

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


foreach ($_SESSION['users'] as $user) {
    
    
    if ($user['id'] == $urlId) {
        
        $index = array_search($user, $_SESSION['users']);
        $_SESSION['users'][$index] = array_replace($user, $newUsers);
    }
}
$id = ajout();
$newUsers = array('id' => $id, 'prenom' => $prenom, 'nom' => $nom, 'poste1' => $poste1, 'poste2' => $poste2, 'numero' => $numero, 'mail' => $mail);
}