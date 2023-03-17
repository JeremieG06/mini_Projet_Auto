<?php
function afficherAnnonceDetail($id)
{
    //RECUPERER les annonces depuis la DB pour affichage FOR EACH
    $dbh = new PDO("mysql:dbname=mini_projet_auto_enchere;host=127.0.0.1", "root", "");
    $query = $dbh->prepare('SELECT * FROM ads WHERE id = :id');
    $query->bindValue([':id', '$id']);
    $query->execute([':id =$id']); // Execution de la requête préparée
    {
        echo "<ul>
        <li> Image : " . $id['image'] . "</li>
        </br>
            <li> Prix de départ : " . $id['starting_price'] . "</li>
            </br>
            <li> Date de fin d'enchère :" . $id['closing_date'] . "</li>
            </br>
            <li> Modèle de voiture : " . $id['car_model'] . "</li>
            </br>
            <li> Marque de la voitrue : " . $id['car_brand'] . "</li>
            </br>
            <li> Puissance du moteur :" . $id['engine_power'] . "</li>
            </br>
            <li> Année du véhicule :" . $id['car_year'] . "</li>
            </br>
            <li> Description : " . $id['description'] . "</li>
            </ul> </br>
            </br>";

        echo '<form method="post" action="annonceDetails.php">';
        echo '<input type="hidden" name="ad_id" value="' . $id['id'] . '">';
        echo '<input type="submit" name="submit_bid" value="Informations">';
        echo '</form>';
    }
}
