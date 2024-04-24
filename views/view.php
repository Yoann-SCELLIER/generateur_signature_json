<?php

// rappel des liens "accueil" et "formulaire"
require_once dirname(__DIR__) . '/components/header.php';

// mais en relation avec les autres fichiers "$_SESSION"
session_start();

// création d'une variable pour récuperer "id" de la "URL"
$id = $_GET['id'];

// création d'une variable qui parcour le tableau et assigne chaque élément
foreach ($_SESSION['cars'] as $car) {

    // vérifie "id" de chaque élément du tableau pour afficher les détails
    if ($car['id'] == $id) {    // [1,2,3,4,5, 10  , 10]

        // affiche une "div" pour afficher les détails de chaque élément selectionné
?>
        <link rel="stylesheet" href="style.css">
        <div class="autocentre">
            <div class="card">
                <img width="150" src="<?php echo $car["image"] ?>" alt="image">
                <div class="container">
                    <h4>ID du véhicule :<br> <?php echo $car["id"] ?></h4>
                    <p>Modél du véhicule :<br> <?php echo $car["model"]?></p>
                    <p>Véhicule en stock :<br> <?php echo $car["stock"] ?></p>
                    <p>Véhicule vendu :<br> <?php echo $car["vendu"] ?></p>
                    <a href="formulaireUp.php?id=<?php echo $car["id"] ?>">MODIFIER</a>
                    <a href="/generateur_json/controllers/delete.php?id=<?php echo $car["id"] ?>">SUPPRIMER</a>
                    </div>
            </div>
        </div>

<?php
    }
}

require_once dirname(__DIR__) . '/components/header.php';