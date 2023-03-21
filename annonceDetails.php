<?php require_once(__DIR__ . '/post.auction.users.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d4ade387aa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Mon compte</title>
</head>

<body>
    <header>
        <img src="./Images/logo.png" alt="voiture" />


        <div class="title">
            <h1>Vectus Enchères</h1>
        </div>

    </header>
    <nav>
        <div class="topnav">
            <a class="active" href="index.php"><i class="fa-solid fa-house-chimney"></i></a>
            <a href="annonces.php">Annonces</a>
            <a class="compte" href="compte.php">Mon Compte</a>
        </div>
    </nav>

    <div class="background"></div>



    <?php
    require_once(__DIR__ . '/fonctionAnnonceDetails.php');

    $id = isset($_GET['ad_id']) ? $_GET['ad_id'] : null;
    if ($id !== null) {
        afficherAnnonceDetail($id);
    } else {
        echo "L'identifiant de l'annonce n'a pas été spécifié.";
    }
    Auctions($starting_price);
    ?>

    <footer>
        <p class="mot"> 2023 Mini-Projet Enchères Automobiles, le Bocal Academy </p>
        <p>Créé avec passion par notre groupe.</p>
    </footer>

</body>

</html>