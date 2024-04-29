<?php

// Fonction pour les signatures
require_once dirname(__DIR__) . '/functions/signature.fn.php';

// on appel la fonction de modification des signatures qui ce situe dans le dossier function signature.fn.php
refreshAll();

// Redirection sur la page d'accueil
header('Location: /generateur_json/index.php'); 