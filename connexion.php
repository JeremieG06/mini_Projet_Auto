<?php
require_once(__DIR__ . './post.login.users.php');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Intitulé de ma page</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/d4ade387aa.js" crossorigin="anonymous"></script>
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
      <a class="connexion" href="connexion.php">Connexion</a>
    </div>
  </nav>


  <form action="connexion.php" method="POST">

    <h2>Connexion</h2>

    </input>
    <label class="compte">Email :</label>
    <br />
    <input name="email" type="texte" placeholder="votre email">
    </input>
    <label class="compte">Mot de passe :</label>
    <br />
    <input name="password" type="password" placeholder="votre mot de passe">
    </input>
    <button class="buttonSub">valider </button>

  </form>
</body>

</html>