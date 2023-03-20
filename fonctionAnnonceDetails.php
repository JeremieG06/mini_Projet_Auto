
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
        echo "<ul>
            <li> Image : " . $annonce['image'] . "</li>
            <br>
            <li> Prix de départ : " . $annonce['starting_price'] . "</li>
            <br>
            <li> Date de fin d'enchère : " . $annonce['closing_date'] . "</li>
            <br>
            <li> Modèle de voiture : " . $annonce['car_model'] . "</li>
            <br>
            <li> Marque de la voiture : " . $annonce['car_brand'] . "</li>
            <br>
            <li> Puissance du moteur : " . $annonce['engine_power'] . "</li>
            <br>
            <li> Année du véhicule : " . $annonce['car_year'] . "</li>
            <br>
            <li> Description : " . $annonce['description'] . "</li>
            </ul> <br><br>";

        echo '<form method="post" action="annonceDetails.php">';
        echo '<input type="hidden" name="ad_id" value="' . $annonce['id'] . '">';
        echo '</form>';
    }

}
 
?>
