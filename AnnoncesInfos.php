
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
        <li> <img src = " . $data['image'] . "/></li>
        <li class='mot'><img src='./Images/telechargement.png' class='prix' /></img> Prix de départ :". $data['starting_price'] ."</li> 
            </br>
            <li class='mot'><i class='fa-solid fa-calendar-days'></i> Date de fin d'enchère :" . $data['closing_date'] . "</li>
            </br>
            <li class='mot'><i class='fa-sharp fa-solid fa-car'></i> Modèle de voiture : " . $data['car_model'] . "</li>
            </br>
            <li class='mot'><i class='fa-sharp fa-solid fa-car'></i> Marque de la voitrue : " . $data['car_brand'] . "</li>
            </br>
            <li class='mot'><img src='./Images/engine.png' class='moteur'/></img> Puissance du moteur :" . $data['engine_power'] . "</li>
            </br>
            <li class='mot'><i class='fa-solid fa-calendar-days'></i> Année du véhicule :" . $data['car_year'] . "</li>
            </br>
            <li class='Description' >  Description : " . $data['description'] . "</li>
            </ul> </br>";

            echo '<form method="GET" action="annonceDetails.php">';
        echo '<input type="hidden" name="ad_id" value="' . $data['id'] . '">';
        echo '<input class="information" type="submit" name="submit_bid" value="Informations" >';
        echo '</form>';
    }
}

