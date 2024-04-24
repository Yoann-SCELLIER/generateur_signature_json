<?php

// rappel des liens "accueil" et "formulaire"
require_once dirname(__DIR__) . '/components/header.php';
require_once dirname(__DIR__) . '/config/data.php';
require_once dirname(__DIR__) . '/functions/signature.fn.php';

// session_start();

$id = $_GET['id'];

foreach ($_SESSION['cars'] as $car) {

    if ($car['id'] == $id) {    // [1,2,3,4,5, 10  , 10]


        // mais en relation avec les autres fichiers "$_SESSION"

        // affiche la "div" pour la liste des éléments du tableau
?>
        <div id='formId'>
            <form method='post' action='/generateur_json/controllers/update.php?id=<?= $_GET['id'] ?>'>

                <input type='text' name='id' value='<?php echo $_GET['id'] ?>' hidden>

                <p>Modifier le nombre de vente du véhicule :</p>
                <input type='text' name='vendu' id='formNumber' placeholder="<?php echo $car["vendu"] ?>"> <br>

                <p>Modifier le nombre de stock du véhicule :</p>
                <input type='text' name='stock' id='formNumber' placeholder="<?php echo $car["stock"] ?>"> <br>

                <img width="150" src="<?php echo $car["image"] ?>" alt="image"> <br>

                <input type='submit' value='Mettre à jour' id='formSubmit'>
            </form>
        </div>

<?php
    }
}
require_once dirname(__DIR__) . '/components/footer.php';
