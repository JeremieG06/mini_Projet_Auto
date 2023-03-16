<?php
require_once(__DIR__ . '/voiture.class.php');
require_once(__DIR__ . '/users.class.php');
require_once(__DIR__ . '/index.php');

// PDO DATABASE
try {
    $dbh = new PDO("mysql:dbname=mini_projet_auto_enchere;host=127.0.0.1", "root", "");
    foreach ($dbh->query('SELECT * from ads') as $row) {
        print_r($row);
    }
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

// POST sur formulaire Annonce
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Je récupère les informations et je crée l'instance 
    $voiture = new Voiture(
        $_POST["image"],
        $_POST["prixDepart"], // Ajout du nom des clés correspondantes pour chaque propriété de Voiture
        $_POST["dateFin"],
        $_POST["modele"],
        $_POST["marque"],
        $_POST["puissance"],
        $_POST["annee"],
        $_POST["description"]
    );
    header('Location: http://localhost/Mini_Projet/mini_Projet_Auto/annonces.php');

    //Query pour ajout d'une annonce voiture - connexion avec la database
    $query = $dbh->prepare("INSERT INTO ads (image, prixDepart, dateFin, modele, marque, puissance, annee, description) 
                            VALUES (:image, :prixDepart, :dateFin, :modele, :marque, :puissance, :annee, :description)");
    $query->bindParam(":image", $_POST["image"]);
    $query->bindParam(":prixDepart", $_POST["prixDepart"]);
    $query->bindParam(":dateFin", $_POST["dateFin"]);
    $query->bindParam(":modele", $_POST["modele"]);
    $query->bindParam(":marque", $_POST["marque"]);
    $query->bindParam(":puissance", $_POST["puissance"]);
    $query->bindParam(":annee", $_POST["annee"]);
    $query->bindParam(":description", $_POST["description"]);
}
