<?php

class Voiture  {

  public $image;

   private int $prixDépart;

   public int $dateFin;

   public $modele;

   public $marque;

   public $puissance;

   private $année;

   public $description;


   public function __construct($image, $prixDépart, $dateFin, $modele, $marque, $puissance, $année, $description )
  {
    $this->image = $image;
    $this->prixDépart = $prixDépart;
    $this->dateFin = $dateFin;
    $this->modele = $modele;
    $this->marque = $marque;
    $this->puissance= $puissance;
    $this->année = $année;
    $this->description = $description;
  }


  public function getPrixDépart()
  {
    return $this->prixDépart;
  }

  public function setPrixDépart($prixDépart)
  {
    $this->prixDépart = $prixDépart;
  }


  public function getAnnée()
  {
    return $this->année;
  }

  public function setAnnée($année)
  {
    $this->année = $année;
  }





}








?>
