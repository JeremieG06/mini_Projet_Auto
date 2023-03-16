<?php

class Voiture  {

  public $image;

   private int $prixDepart;

   public $dateFin;

   public $modele;

   public $marque;

   public $puissance;

   private $annee;

   public $description;


   public function __construct($image, $prixDepart, $dateFin, $modele, $marque, $puissance, $annee, $description )
  {
    $this->image = $image;
    $this->prixDepart = $prixDepart;
    $this->dateFin = $dateFin;
    $this->modele = $modele;
    $this->marque = $marque;
    $this->puissance= $puissance;
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





}








?>
