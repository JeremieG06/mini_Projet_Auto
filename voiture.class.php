<?php

class Voiture
{

  public $image;

  private int $prixDepart;

  public $dateFin;

  public $modele;

  public $marque;

  public $puissance;

  private $annee;

  public $description;


  public function __construct($image, $prixDepart, $dateFin, $modele, $marque, $puissance, $annee, $description)
  {
    $this->image = $image;
    $this->prixDepart = $prixDepart;
    $this->dateFin = $dateFin;
    $this->modele = $modele;
    $this->marque = $marque;
    $this->puissance = $puissance;
    $this->annee = $annee;
    $this->description = $description;
  }


  public function getPrixDepart()
  {
    return $this->prixDepart;
  }

  public function setPrixDepart($prixDepart)
  {
    $this->prixDepart = $prixDepart;
  }


  public function getannee()
  {
    return $this->annee;
  }

  public function setannee($annee)
  {
    $this->annee = $annee;
  }

  // Fonction FOR EACH pour listing des annonces:
  public function afficherAnnonces()
  {
    $voiture = array($image, $prixDepart, $dateFin, $modele, $marque, $puissance, $annee, $description);
    echo "<h2>Récapitulatif de l'annonce :</h2>";
    echo "<p>Image : {$this->image} </p>";
    echo "<p>Prix de départ : {$this->prixDepart} </p>";
    echo "<p>Date de fin : {$this->dateFin} </p>";
    echo "<p>Modèle : {$this->modele}</p>";
    echo "<p>Marque : {$this->marque} </p>";
    echo "<p>Puissance :  {$this->puissance}</p>";
    echo "<p>Année :  {$this->annee}</p>";
    echo "<p>Description :{$this->description}</p>";
    foreach ($voiture as $newOne) {
      echo $newOne;
    }
  }
}
