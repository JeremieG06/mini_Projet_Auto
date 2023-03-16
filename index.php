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
      <a class="active" href="#home"><i class="fa-solid fa-house-chimney"></i></a>
      <a href="#Annonces">Annonces</a>
      <a class="compte" href="http://localhost/mini_Projet_Auto/compte">Mon Compte</a>

    </div>

  </nav>
  <form action="post.php" method="POST">

    <h2>Annonce Voiture</h2>

    <label class="instruc">image du véhicule :</label>
    <br />
    <input name="image" type="file">
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
    <input name="année" type="texte">
    </input>
    <label class="instruc">Description de votre véhicule :</label>
    <br />
    <input name="description" type="texte">
    </input>
    <button class="buttonSub"> valider </button>
    
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $image = $_POST["image"];
    $prixDepart = $_POST["prixDepart"];
    $dateFin = $_POST["dateFin"];
    $modele = $_POST["modele"];
    $marque = $_POST["marque"];
    $puissance = $_POST["puissance"];
    $année = $_POST["année"];
    $description = $_POST["description"];


    $query = $dbh->prepare("INSERT INTO annonce (image, prixDepart,dateFin, modele, marque, puissance, année, description) VALUES (:image :prixDepart, :dateFin, :modele, :marque, :puissance, :année, :description)");
    $query->bindParam(":image", $image);
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

  ?>


  <footer>

  </footer>

</body>

</html>