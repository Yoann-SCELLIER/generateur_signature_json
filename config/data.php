<?php

require_once dirname(__DIR__) . '/components/header.php';

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