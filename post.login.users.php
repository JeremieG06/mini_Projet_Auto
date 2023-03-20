<?php
require_once(__DIR__ . '/connexion.php');

// Fonction de LOGIN
function LogIn($email, $password)
{
    // Démarrage de session
    session_start();

    // Vérifier si l'utilisateur est déjà connecté
    if(isset($_SESSION["users"])) {
        // Rediriger vers la page d'accueil
        header("Location: annonces.php");
        exit;
    }

    // Vérifier les informations de connexion
    try {
        $dbh = new PDO("mysql:dbname=mini_projet_auto_enchere;host=127.0.0.1", "root", "");
        $query = $dbh->prepare('SELECT * FROM users WHERE `email` = :email AND `password` = :password');
        $query->execute(array(':email' => $email, ':password' => $password));
        $results = $query->fetch(); // Récupération des données

        if($results) {
            // Stocker les données de l'utilisateur dans la session
            $_SESSION["users"] = $results;

            // Rediriger vers la page d'accueil
            header("Location: annonces.php");
            exit;
        } else {
            // Afficher un message d'erreur
            $error = "Nom d'utilisateur ou mot de passe incorrect.";
        }
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}

// Vérifier si le formulaire de connexion a été soumis
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données de formulaire
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Appeler la fonction LogIn avec les données de connexion
    LogIn($email, $password);
}