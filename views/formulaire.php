<?php
require_once dirname(__DIR__) . '/components/header.php';

// affiche la "form" pour le formulaire
?>

<link rel='stylesheet' href='style.css'>

<form id='formId'>
    <form action='./traitement.php' method='post'>

        <label for='formText'>Model du véhicule: </label>
        <input type='text' name='model' id='formText'>

        <label for='forNumber'>Véhicule vendu: </label>
        <input type='number' name='vendu' id='formNumber'><br>

        <label for='forNumber'>Véhicule en stock: </label>
        <input type='number' name='stock' id='formNumber'>

        <label for=''>Envoyer image: </label>
        <input type='file' name='upImage'><br><br>

        <label for=''>Lien image: </label>
        <input type='text' name='image'><br><br>

        <input type='submit' id='formSubmit'></bouton>
    </form>
</form>

<?php

require_once dirname(__DIR__) . '/components/footer.php';

?>