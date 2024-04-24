<?php

function supprimer()
{
    // mais en relation avec les autres fichiers "$_SESSION"
    session_start();

    // création d'une variable qui récupére l'ID de la URL
    $idCar = $_GET['id'];

    // création d'une boucle pour parcourir le tableau $_SESSION et assigner chaque élément à $car
    foreach ($_SESSION['cars'] as $car) {

        // "SI" $car['id'] et identique $idCar et égale
        if ($car['id'] == $idCar) {

            // array_splice($_SESSION['cars'][$index], $car, 1);
            $index = array_search($car, $_SESSION['cars']);

            // "ALORS" supprime l'élément
            // explication : array_splice( tableau,clé,longeur);
            array_splice($_SESSION['cars'], $index, 1);
        }

        // redirection vers l'index
        header('location: index.php');
    }
}

function update()
{

    // mais en relation avec les autres fichiers "$_SESSION"
    session_start();

    // création de variable qui serons rappelé
    $urlId = $_POST['id'];

    $vendu = $_POST['vendu'];
    $stock = $_POST['stock'];

    $newCars = array("vendu" => $vendu, "stock" => $stock);

    foreach ($_SESSION['cars'] as $car) {


        if ($car['id'] == $urlId) {

            $index = array_search($car, $_SESSION['cars']);
            $_SESSION['cars'][$index] = array_replace($car, $newCars);
        }
    }
}
