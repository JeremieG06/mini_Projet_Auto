<?php
function afficher()
{
    //RECUPERER les annonces depuis la DB pour affichage FOR EACH
    $dbh = new PDO("mysql:dbname=mini_projet_auto_enchere;host=127.0.0.1", "root", "");
    $query = $dbh->prepare('SELECT * FROM ads');
    $query->execute(); // Execution de la requête préparée
    $results = $query->fetchAll(); // Récupération des datas
    // var_dump($results);
    //Fonction FOR EACH avec ECHO pour affichage sur la page Annonces
    foreach ($results as $data) {
        echo "<ul>
        <li> Image : " . $data['image'] . "</li>
        </br>
            <li> Prix de départ : " . $data['starting_price'] . "</li>
            </br>
            <li> Date de fin d'enchère :" . $data['closing_date'] . "</li>
            </br>
            <li> Modèle de voiture : " . $data['car_model'] . "</li>
            </br>
            <li> Marque de la voitrue : " . $data['car_brand'] . "</li>
            </br>
            <li> Puissance du moteur :" . $data['engine_power'] . "</li>
            </br>
            <li> Année du véhicule :" . $data['car_year'] . "</li>
            </br>
            <li> Description : " . $data['description'] . "</li>
            </ul> </br>
            </br>";


        echo '<form method="post" action="annonceDetails.php">';
        echo '<input type="hidden" name="ad_id" value="' . $data['id'] . '">';
        echo '<input type="submit" name="submit_bid" value="Informations">';
        echo '</form>';
    }
}