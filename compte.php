<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d4ade387aa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Inscription</title>
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
        
        </div>
    </nav>
    <div class="background"></div>
    <form action="post.users.php" method="POST">
        
        <h2>Créer un compte</h2>

        <label class="instruc">Entrez votre nom :</label>
        <br />
        <input name="lastname" type="text">
        </input>
        <label class="instruc"> Entrez votre prénom :</label>
        <br />
        <input name="firstname" type="texte">
        </input>
        <label class="instruc">Entrez votre email :</label>
        <br />
        <input name="email" type="texte">
        </input>
        <label class="instruc"> Entrez votre Mot de passe :</label>
        <br />
        <input name="password" type="password">
        </input>
        <button class="buttonSub">valider</button>
    </form>
    <footer>
    <p class="mot"> 2023 Mini-Projet Enchères Automobiles, le Bocal Academy  </p>
      <p>Créé avec passion par notre groupe.</p>
	</footer>




</body>

</html>