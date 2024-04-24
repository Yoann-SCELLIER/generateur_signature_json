<?php
// Connexion à la base de donnée
// require_once dirname(__DIR__) . '\config\data.php'; 
// Fonction pour les signatures
require_once dirname(__DIR__) . '/functions/signature.fn.php';

// on appel la fonction de modification des signatures qui ce situe dans le dossier function signature.fn.php
update();

header('Location: /generateur_json/index.php'); // Redirection sur la page d'accueil