<?php
require_once dirname(__DIR__) . '/components/header.php';

// rappel des liens 'accueil' et 'formulaire'
// require_once dirname(__DIR__) . '/config/data.php';
// require_once dirname(__DIR__) . '/functions/add.php';

// affiche la 'form' pour le formulaire
?>

<form action='/generateur_json/controllers/add.php' method='post'>
    <label for='model'>Modèle du véhicule:</label>
    <input type='text' name='model' id='model'>

    <label for='vendu'>Véhicules vendus:</label>
    <input type='number' name='vendu' id='vendu'>

    <label for='stock'>Véhicules en stock:</label>
    <input type='number' name='stock' id='stock'>

    <input type='submit' value='Ajouter'>
</form>

<?php

require_once dirname(__DIR__) . '/components/footer.php';

?>