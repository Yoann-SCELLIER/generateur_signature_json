<?php

function supprimer()
{
    // mais en relation avec les autres fichiers '$_SESSION'
    session_start();

    // création d'une variable qui récupére l'ID de la URL
    $idCar = $_GET['id'];

    // création d'une boucle pour parcourir le tableau $_SESSION et assigner chaque élément à $car
    foreach ($_SESSION['cars'] as $car) {

        // 'SI' $car['id'] et identique $idCar et égale
        if ($car['id'] == $idCar) {

            // array_splice($_SESSION['cars'][$index], $car, 1);
            $index = array_search($car, $_SESSION['cars']);

            // 'ALORS' supprime l'élément
            // explication : array_splice( tableau,clé,longeur);
            array_splice($_SESSION['cars'], $index, 1);
        }
    }
}

function update()
{

    // mais en relation avec les autres fichiers '$_SESSION'
    session_start();

    // création de variable qui serons rappelé
    $urlId = $_POST['id'];
    $vendu = $_POST['vendu'];
    $stock = $_POST['stock'];

    $newCars = array('vendu' => $vendu, 'stock' => $stock);

    foreach ($_SESSION['cars'] as $car) {

        if ($car['id'] == $urlId) {

            $index = array_search($car, $_SESSION['cars']);
            $_SESSION['cars'][$index] = array_replace($car, $newCars);
        }
    }
}

function add()
{

    // création de variable
    $model = $_POST['model'];
    $vendu = $_POST['vendu'];
    $stock = $_POST['stock'];


    // création d'un 'function' pour ajouter un 'id' différent du tableau
    function ajout()
    {
        session_start();

        // création d'une variable qui démarre à 5 (élément près défini dans le tableau)
        $id = $_SESSION['cars']['id'];

        // création d'une boucle
        foreach ($_SESSION['cars'] as $car) {
            if ($car['id'] > $id) {
                $id = $car['id'];
            }
        }
        $id++;
        return $id;
    }

    // mais en relation avec les autres fichiers '$_SESSION'
    $id = ajout();

    // création d'une variable qui reprend les éléments d'un tableau
    $newCars = array('id' => $id, 'model' => $model, 'vendu' => $vendu, 'stock' => $stock);

    // envoie les nouveau éléments dans le tableau
    array_push($_SESSION['cars'], $newCars);
}

function refreshAll()
{

    // mais en relation avec les autres fichiers "$_SESSION"
    session_start();

    // création d'une variable qui reprend un tableau multidimensionnel associatif
    $_SESSION['cars'] = array(
        array("id" => 1, "model" => "Volvo", "vendu" => 22, "stock" => 18, "image" => "https://upload.wikimedia.org/wikipedia/commons/3/3c/Volvo_Trucks_Logo.png"),
        array("id" => 2, "model" => "BMW", "vendu" => 33, "stock" => 5, "image" => "https://www.autocollants-stickers.com/resize/634x480/zc/2/f/0/src/sites/astickers/files/products/d8293.png"),
        array("id" => 3, "model" => "Saab", "vendu" => 3, "stock" => 88, "image" => "https://marque-voiture.com/wp-content/uploads/2016/01/Saab-Logo-1974.png"),
        array("id" => 4, "model" => "Land Rover", "vendu" => 45, "stock" => 2, "image" => "https://cdn.worldvectorlogo.com/logos/land-rover-1.svg"),
        array("id" => 5, "model" => "Mercedes", "vendu" => 46, "stock" => 13, "image" => "https://www.1min30.com/wp-content/uploads/2017/09/mercedes-benz-emblem.jpg")
    );
}
