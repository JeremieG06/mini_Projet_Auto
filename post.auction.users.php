<?php
require_once(__DIR__ . '/fonctionAnnonceDetails.php');

// Fonction
function Auctions($starting_price) //UPDATE pour enchères
{

    // 1 - Vérifier si l'utilisateur est déjà connecté
    session_start();
    if (isset($_SESSION["users"])) {
        echo "Vous êtes bien connecté(e), vous pouvez enchérir !";
    } else {
        // Afficher un message d'erreur
        echo "Impossible d'enchérir, vous n'êtes pas connecté(e) !";
        return; // Fin
    }

    // 2 - PDO FETCH - pour récupérer le prix de départ et créer l'input
    try {
        $dbh = new PDO("mysql:dbname=mini_projet_auto_enchere;host=127.0.0.1", "root", "");
        $query = $dbh->prepare('SELECT * FROM ads WHERE starting_price = :starting_price ');
        $query->execute(array(':starting_price' => $starting_price));
        $starting_price = $query->fetch();
        // var_dump($starting_price);

        // 3- Création de l'INPUT pour enchère (new_price sur DB dans auctions)
        echo "<div><li>Votre enchère : <input type='number' name='new_price' ></input></li>
            <br>
            <button type='submit'>Enchérir</button>
            <br></div>";
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    // 3 - POST de l'INPUT selon le name 'new_price'
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["new_price"])) {
        // Récupérer les données de formulaire
        $new_price = $_POST["new_price"];

        //PDO - INSERT - enregistrement du new_price dans la table AUCTIONS
        $query = $dbh->prepare("INSERT INTO `auctions` (`new_price`)
        VALUES (:new_price)");
        $query->bindValue(":new_price", $_POST["new_price"]);
        $query->execute();

        //PDO - UPDATE - changement du starting_price dans le tableau ADS
        $query = $dbh->prepare("UPDATE `ads` (`new_price`)
        SET new_price = $new_price WHERE starting_price = $starting_price ");
        $query->bindValue(":new_price", $_POST["new_price"]);
        $query->execute();

        // On affiche un message de confirmation
        echo "Votre enchère a bien été enregistrée !";
    }
}
