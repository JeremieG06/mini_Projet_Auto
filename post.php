<?php
require_once(__DIR__ . '/voiture.class.php');
require_once(__DIR__ . '/users.class.php');
require_once(__DIR__ . '/index.php');


// PDO DATABASE
$dbh = new PDO("mysql:dbname=mini_projet_auto_enchere;host=127.0.0.1", "root", "");

// Lecture de la réponse pour USERS
$result = $dbh->query("SELECT * FROM users");
// Requête pour USERS
$query = $dbh->prepare('SELECT * FROM users WHERE email = :email');
$query->bindValue(':email', 'pierre.lefevre@gmail.com', PDO::PARAM_STR); // Utilisation de PDO::PARAM_STR
$query->execute(); // Execution de la requête préparée
$results = $query->fetchAll();
//Query pour ajout d'un USER connexion avec la database
$query = $dbh->prepare("INSERT INTO users (lastname, firstname, email, password) VALUES (:lastname, :firstname, :email, :password)");
$image->bindParam(":lastname", $lastname);
$query->bindParam(":firstname", $firstname);
$query->bindParam(":email", $email);
$query->bindParam(":password", $password);
$query->execute();


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

    //Query pour ajout d'una annonce voiture connexion avec la database
    $query = $dbh->prepare("INSERT INTO ads (image, prixDepart, dateFin, modele, marque, puissance, année, description) VALUES (:image, :prixDepart, :dateFin, :modele, :marque, :puissance, :année, :description)");
    $image->bindParam(":image", $image);
    $query->bindParam(":prixDepart", $prixDepart);
    $query->bindParam(":dateFin", $dateFin);
    $query->bindParam(":modele", $modele);
    $query->bindParam(":marque", $marque);
    $query->bindParam(":puissance", $puissance);
    $query->bindParam(":année", $année);
    $query->bindParam(":description", $description);
    $query->execute();

    echo "Annonce ajouté avec succès !";
}
