<?php
require_once(__DIR__ . '/voiture.class.php');
require_once(__DIR__ . '/user.class.php');

//PDO
$dbh = new PDO("mysql:dbname=mini_projet_auto_enchere;host=127.
0.0.1", "root", "");
//Lecture de la réponse
$result = $dbh->query("SELECT * FROM users");

//Requêtes
$query = $dbh->prepare('SELECT *
FROM users
WHERE email = :email');
$query->bindValue(
    ':email',
    'pierre.lefevre@gmail.com',
    $pdo::PARAM_STR
);
$results = $query->fetchAll();


//POST sur formumlaire Annonce
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Je recupere les informations et je crée l'instance 
    $voiture = new Voiture(
        $_POST[""],
        $_POST[""],
        $_POST[""],
        $_POST[""],
        $_POST[""],
        $_POST[""],
        $_POST[""],
    );
    var_dump($voiture);
}
