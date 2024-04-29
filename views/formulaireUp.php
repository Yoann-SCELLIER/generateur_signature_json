<?php

require_once dirname(__DIR__) . '/components/header.php';

session_start();

$id = $_GET["id"];

foreach ($_SESSION["users"] as $user) {

    if ($user["id"] == $id) {

        // affiche la 'div' pour la liste des éléments du tableau
?>
        <form style='border: solid; border-width: 2px; width: 550px; padding: 10px;' action='/generateur_json/controllers/update.php?id=<?= $_GET["id"] ?>' method='post'>
            <div style='margin: 10px;'>
                <input type='text' name='id' value='<?php echo $_GET["id"] ?>' hidden>
                <label style='color: #e85d1c; font-family: Arial; font-weight: bold; font-size: 20px;' for='prenom'>Prénom :</label>
                <input type='text' placeholder='<?php echo $user["prenom"] ?>' name='prenom' id='prenom'>
                <label style='color: #e85d1c; font-family: Arial; font-weight: bold; font-size: 20px;' for='nom'>Nom :</label>
                <input size='22' type='text' placeholder='<?php echo $user["nom"] ?>' name='nom' id='nom'>
            </div>
            <br>
            <div style='margin: 10px;'>
                <label style='color: #e85d1c; font-family: Arial; font-weight: bold; font-size: 20px;' for='poste1'>Poste 1 :</label>
                <input size='57' type='text' placeholder='<?php echo $user["poste1"] ?>' name='poste1' id='poste1'>
            </div>
            <br>
            <div style='margin: 10px;'>
                <label style='color: #e85d1c; font-family: Arial; font-weight: bold; font-size: 20px;' for='poste2'>Poste 2 :</label>
                <input size='57' type='text' placeholder='<?php echo $user["poste2"] ?>' name='poste2' id='poste2'>
            </div>
            <br>
            <div style='margin: 10px;'>
                <label style='color: #e85d1c; font-family: Arial; font-weight: bold; font-size: 20px;' for='numero'>Numéro :</label>
                <input type='text' placeholder='<?php echo $user["numero"] ?>' name='numero' id='numero'>
                <label style='color: #e85d1c; font-family: Arial; font-weight: bold; font-size: 20px;' for='mail'>Email :</label>
                <input type='text' placeholder='<?php echo $user["mail"] ?>' name='mail' id='mail'>
            </div>
            <!-- Fin du formulaire des modifications -->
            <br>
            <div style='text-align: center; background-color: rgb(255, 255, 255); color: #e85d1c; font-family: Arial; font-weight: bold; font-size: 20px;'>
                <!-- Bouton pour enregistrer les modifications ou retourner à l'accueil -->
                <button style='background-color: rgb(255, 255, 255); color: #e85d1c; font-family: Arial; font-weight: bold; font-size: 20px;' type='submit'>Enregistrer les modifications</button>
                <a href='/generateur_json/index.php' style='background-color: rgb(255, 255, 255); color: #e85d1c; font-family: Arial; font-weight: bold; font-size: 20px;'>Accueil</a>
                <!-- Fin des Boutons enregistrer et accueil -->
            </div>
        </form>

        <h1 style='color: #e85d1c; font-family: Arial; font-weight: bold; font-size: 20px;'>Formulaire de modification :</h1>
        <p style='color: #065f60; font-family: Arial; font-weight: normal; margin: 8px 0px 8px 0px;'>Le formulaire présent ici vous permet de modifier votre signature en conservant les informations déjà prédéfinies. <br>
            Veuillez modifier les champs désirés, ce qui n'a pas été modifié restera inchangé.</p>
        <br>
        <hr>
        <!-- Vue de la signature ciblée à modifier -->
        <table>
            <tr>
                <td>
                    <!-- Affichage du logo -->
                    <img src='/generateur_signature/assets/img/Énumière-logotype.svg' alt='Logo Énumière' style='width: 9rem;'>
                    <!-- Fin logo -->
                </td>
                <td>
                    <!-- Séparation entre logo et contenu -->
                    <span style='border-left: 1px solid #e85d1c;display: inline-block; height: 115px;'></span>
                    <!-- Fin séparation -->
                </td>
                <td>
                    <!-- Information utilisateur -->
                    <span style='color: #e85d1c; font-family: Arial; font-weight: bold; font-size: 20px;'><?php echo $user["prenom"] ?> <?php echo $user["nom"] ?></span><br>
                    <div style='color: #065f60; font-family: Arial; font-weight: normal; margin: 8px 0px 8px 0px;'>
                        <?php echo $user["poste1"] ?><br>
                        <?php echo $user["poste2"] ?>
                    </div>
                    <span style='  color: #e85d1c; font-family: Arial; font-style: italic;'><?php echo $user["numero"] ?> | <?php echo $user["mail"] ?><br>
                        www.enumiere.com</span>
                    <!-- Fin information -->
                </td>
            </tr>
        </table>
        <!-- Fin de la vue de la signature ciblée -->

<?php
    }
}
require_once dirname(__DIR__) . '/components/footer.php';