
<?php
function afficherAnnonceDetail($id)
{
    //RECUPERER les annonces depuis la DB pour affichage FOR EACH
    $dbh = new PDO("mysql:dbname=mini_projet_auto_enchere;host=127.0.0.1", "root", "");
    $query = $dbh->prepare('SELECT * FROM ads WHERE id = :id');
    $query->bindValue(":id", $id);
    $query->execute();
    $result = $query->fetchAll(); // récupère les résultats de la requête
    
    foreach ($result as $annonce) { // boucle pour afficher chaque annonce
        echo "<ul class='listing' >
            <li> " . $annonce['image'] . "</li>
            <br>
            <li class='mot'> <img src='./Images/telechargement.png' class='prix' /> Prix de départ : " . $annonce['starting_price'] . "</li>
            <br>
            <li class='mot'> <i class='fa-solid fa-calendar-days'></i> Date de fin d'enchère : " . $annonce['closing_date'] . "</li>
            <br>
            <li class='mot'> <i class='fa-sharp fa-solid fa-car'></i> Modèle de voiture : " . $annonce['car_model'] . "</li>
            <br>
            <li class='mot'> <i class='fa-sharp fa-solid fa-car'></i> Marque de la voiture : " . $annonce['car_brand'] . "</li>
            <br>
            <li class='mot'> <img src='./Images/engine.png' class='moteur'/></img> Puissance du moteur : " . $annonce['engine_power'] . "</li>
            <br>
            <li class='mot'> <i class='fa-solid fa-calendar-days'></i> Année du véhicule : " . $annonce['car_year'] . "</li>
            <br>
            <li class='mot'> Description : " . $annonce['description'] . "</li>
            <br/>
            </ul> <br><br>";

        echo '<form method="post" action="annonceDetails.php">';
        echo '<input type="hidden" name="ad_id" value="' . $annonce['id'] . '">';
        echo '</form>';
        
    }

}
 
?>
