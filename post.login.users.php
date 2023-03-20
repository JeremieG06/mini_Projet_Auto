<?php
require_once(__DIR__ . '/connexion.php');

//Fonctin de LOGIN
function LogIn($email, $password)
{
    //Démarrage de session:
    session_start();
    //Début de condition de login
    //PDO DB
    try {
        $dbh = new PDO("mysql:dbname=mini_projet_auto_enchere;host=127.0.0.1", "root", "");
        $query = $dbh->prepare('SELECT * FROM users WHERE `email` = :email AND `password` = :password');
        $query->execute(); // Execution de la requête préparée
        $query->bindValue(":email", $email);
        $query->bindValue(":password", $password);
        $results = $query->fetch(); // Récupération des datas
        var_dump($results);

        // {
        //     if (!empty($_POST['email']) && !empty($_POST['password'])) { {
        //             if (
        //                 $_POST['email'] === ['email']
        //                 &&
        //                 $_POST['password'] === ['password']
        //             ) {
        //                 $loggedUser = [
        //                     'email' => ['email'],
        //                 ];
        //             } else {
        //                 $errorMessage = sprintf(
        //                     'Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
        //                     $_POST['email'],
        //                     $_POST['password']
        //                 );
        //             }
        //         }
        //     }
        // }
        // $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    };
};
