<?php
require_once(__DIR__ . '/users.class.php');
require_once(__DIR__ . '/compte.php');

// PDO DATABASE
try {
    $dbh = new PDO("mysql:dbname=mini_projet_auto_enchere;host=127.0.0.1", "root", "");
    foreach ($dbh->query('SELECT * from users') as $row) {
        print_r($row);
    }
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

// POST sur formulaire compte
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Je récupère les informations et je crée l'instance 
    $users = new users(
        $_POST["lastname"],
        $_POST["firstname"], // Ajout du nom des clés correspondantes pour chaque propriété du compte
        $_POST["email"],
        $_POST["password"],
    );
}
var_dump($users);

// AJOUT d'un USER - connexion avec la database
$query = $dbh->prepare("INSERT INTO `users` (`lastname`, `firstname`,`email`,`password`)
 VALUES (:lastname, :firstname, :email, :password)");
$query->bindValue(":lastname", $_POST["lastname"]);
$query->bindValue(":firstname", $_POST["firstname"]);
$query->bindValue(":email", $_POST["email"]);
$query->bindValue(":password", $_POST["password"]);
$query->execute();
