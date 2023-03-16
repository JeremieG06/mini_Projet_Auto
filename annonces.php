<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Récapitulatif de l'annonce :</h2>";
    echo "<p>Image : " . $_POST["image"] . "</p>";
    echo "<p>Prix de départ : " . $_POST["prixDepart"] . "</p>";
    echo "<p>Date de fin : " . $_POST["dateFin"] . "</p>";
    echo "<p>Modèle : " . $_POST["modele"] . "</p>";
    echo "<p>Marque : " . $_POST["marque"] . "</p>";
    echo "<p>Puissance : " . $_POST["puissance"] . "</p>";
    echo "<p>Année : " . $_POST["annee"] . "</p>";
    echo "<p>Description : " . $_POST["description"] . "</p>";
}

?>