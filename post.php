<?php
require_once(__DIR__ . '/voiture.class.php');
require_once(__DIR__ . '/user.class.php');

// PDO
$dbh = new PDO("mysql:dbname=mini_projet_auto_enchere;host=127.0.0.1", "root", "");
// Lecture de la réponse
$result = $dbh->query("SELECT * FROM users");

// Requête
$query = $dbh->prepare('SELECT * FROM users WHERE email = :email');
$query->bindValue(':email', 'pierre.lefevre@gmail.com', PDO::PARAM_STR); // Utilisation de PDO::PARAM_STR
$query->execute(); // Execution de la requête préparée
$results = $query->fetchAll();

// POST sur formulaire Annonce
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Je récupère les informations et je crée l'instance 
    $voiture = new Voiture(
        $_POST["image"],
        $_POST["prixDépart"], // Ajout du nom des clés correspondantes pour chaque propriété de Voiture
        $_POST["dateFin"],
        $_POST["modele"],
        $_POST["marque"],
        $_POST["puissance"],
        $_POST["année"],
        $_POST["description"]
    );
    var_dump($voiture);
}
