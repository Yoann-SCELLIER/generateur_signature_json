<?php

function supprimer()
{
    // Vérifier si l'ID utilisateur est présent dans la requête
    if(isset($_GET["id"]) && is_numeric($_GET["id"]) && $_GET["id"] > 0) {
        
        // Démarrer la session
        session_start();

        // Récupérer l'ID utilisateur depuis la requête
        $idUser = (int)$_GET["id"];

        // Rechercher l'index de l'utilisateur dans le tableau $_SESSION
        foreach ($_SESSION["users"] as $index => $user) {
            if ($user["id"] == $idUser) {
                // Supprimer l'utilisateur du tableau $_SESSION
                unset($_SESSION["users"][$index]);
                // Terminer la boucle une fois que l'utilisateur est trouvé et supprimé
                break;
            }
        }

    } else {
        // Gérer le cas où l'ID utilisateur est invalide
        echo "ID utilisateur invalide.";
    }
}

function update()
{
    // Démarrer la session
    session_start();

    // Vérifier si l'ID utilisateur est présent et valide dans la requête
    if(isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) {
        $id = $_GET['id'];

        // Parcourir les utilisateurs dans la session
        foreach ($_SESSION["users"] as &$user) {
            if ($user["id"] == $id) {

                // Vérifier chaque champ et mettre à jour les valeurs si elles sont postées
                if (isset($_POST["prenom"]) && !empty($_POST["prenom"])) {
                    $user["prenom"] = $_POST["prenom"];
                } if (isset($_POST["nom"]) && !empty($_POST["nom"])) {
                    $user["nom"] = $_POST["nom"];
                } if (isset($_POST["poste1"]) && !empty($_POST["poste1"])) {
                    $user["poste1"] = $_POST["poste1"];
                } if (isset($_POST["poste2"]) && !empty($_POST["poste2"])) {
                    $user["poste2"] = $_POST["poste2"];
                } if (isset($_POST["numero"]) && !empty($_POST["numero"])) {
                    $user["numero"] = $_POST["numero"];
                } if (isset($_POST["mail"]) && !empty($_POST["mail"])) {
                    $user["mail"] = $_POST["mail"];
                }  
                // Sortir de la boucle une fois que l'utilisateur est trouvé et mis à jour
                break;
            }
        }
    } else {
        // Gérer le cas où l'ID utilisateur est invalide
        echo "ID utilisateur invalide.";
    }
}

function add()
{
    // Démarrer la session
    session_start();

    // Vérifier si toutes les données du formulaire sont présentes et non vides
    if (isset($_POST["prenom"], $_POST["nom"], $_POST["poste1"], $_POST["poste2"], $_POST["numero"], $_POST["mail"]) && !empty($_POST["prenom"]) && !empty($_POST["nom"]) && !empty($_POST["poste1"]) && !empty($_POST["numero"]) && !empty($_POST["mail"])) {

        // Récupérer les données du formulaire
        $prenom = htmlspecialchars($_POST["prenom"]);
        $nom = htmlspecialchars($_POST["nom"]);
        $poste1 = htmlspecialchars($_POST["poste1"]);
        $poste2 = htmlspecialchars($_POST["poste2"]);
        $numero = htmlspecialchars($_POST["numero"]);
        $mail = htmlspecialchars($_POST["mail"]);

        // Vérifier si l'utilisateur existe déjà dans la session
        foreach ($_SESSION["users"] as $user) {
            if ($user["prenom"] === $prenom && $user["nom"] === $nom) {
                // Rediriger avec un message d'erreur si l'utilisateur existe déjà
                header('Location: /generateur_json/views/formulaire.php?error=user_exists');
                exit();
            }
        }

        // Fonction pour ajouter un ID unique
        function ajout()
        {
            // Démarrer l'ID à partir de 1
            $id = 1;

            // Parcourir les utilisateurs dans la session pour trouver le plus grand ID
            foreach ($_SESSION["users"] as $user) {
                if ($user["id"] >= $id) {
                    $id = $user["id"] + 1;
                }
            }
            return $id;
        }

        // Appeler la fonction pour obtenir un nouvel ID
        $id = ajout();

        // Créer un nouvel utilisateur avec les données du formulaire et l'ID généré
        $newUser = array(
            "id" => $id,
            "prenom" => $prenom,
            "nom" => $nom,
            "poste1" => $poste1,
            "poste2" => $poste2,
            "numero" => $numero,
            "mail" => $mail
        );

        // Ajouter le nouvel utilisateur à la session
        $_SESSION["users"][] = $newUser;
        
        // Redirection vers la page d'accueil
        header('Location: /generateur_json/index.php');
        exit();
    } else {
        // Si des données sont manquantes ou vides, rediriger avec un message d'erreur
        header('Location: /generateur_json/views/formulaire.php?error=missing_data');
        echo "Nom et prénom non disponible.";
        exit();
    }
}

function refreshAll()
{
    // Démarrer la session si elle n'est pas déjà démarrée
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Réinitialiser les données des utilisateurs dans la session
    $_SESSION["users"] = array();
}
