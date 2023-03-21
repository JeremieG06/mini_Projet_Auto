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

    <label class="instruc">Email :</label>
    <br />
    <input name="email" type="texte">
    </input>
    <label class="instruc">Mot de passe :</label>
    <br />
    <input name="password" type="password" >
    </input>
    <button class="buttonSub">valider </button>

  </form>

  <footer>
		
  <p class="mot"> 2023 Mini-Projet Enchères Automobiles, le Bocal Academy  </p>
      <p>Créé avec passion par notre groupe.</p>
	</footer>
</body>

</html>