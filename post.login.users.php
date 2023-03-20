<?php
//Démarrage de session:
session_start();
//Début de condition de login

//PDO DB
try {
    $dbh = new PDO("mysql:dbname=mini_projet_auto_enchere;host=127.0.0.1", "root", "");
    foreach ($dbh->query('SELECT * from users') as $row) {
        // print_r($row);
        if (isset($_POST['email']) &&  isset($_POST['password'])) {
            foreach ($users as $users) {
                if (
                    $users['email'] === $_POST['email'] &&
                    $users['password'] === $_POST['password']
                ) {
                    $loggedUser = [
                        'email' => $users['email'],
                    ];
                } else {
                    $errorMessage = sprintf(
                        'Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                        $_POST['email'],
                        $_POST['password']
                    );
                }
            }
        }
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
