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
      <a class="deconnexion" href="logout.php">Deconnexion</a>
    </div>
  </nav>

  <form action="post.voiture.php" method="POST">

    <h2>Annonce Voiture</h2>

    <label class="instruc">image du véhicule :</label>
    <br />
    <input name="image" type="source">
    </input>
    <label class="instruc">Votre prix de départ :</label>
    <br />
    <input name="prixDepart" type="texte">
    </input>
    <label class="instruc">Date de fin de votre enchère :</label>
    <br />
    <input name="dateFin" type="date">
    </input>
    <label class="instruc">Modèle de votre véhicule :</label>
    <br />
    <input name="modele" type="texte">
    </input>
    <label class="instruc">Marque de votre véhicule :</label>
    <br />
    <input name="marque" type="texte">
    </input>
    <label class="instruc">Puissance de votre véhicule :</label>
    <br />
    <input name="puissance" type="texte">
    </input>
    <label class="instruc">Année de votre véhicule :</label>
    <br />
    <input name="annee" type="date">
    </input>
    <label class="instruc">Description de votre véhicule :</label>
    <br />
    <input name="description" type="texte">
    </input>
    <button class="buttonSub"> valider </button>
  </form>

  <footer>

  </footer>

</body>

</html>