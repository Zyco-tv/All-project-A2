<?php
class Voiture
{
  private $_marque = 'test';           
  private $_couleur = '';   
  private $_nivcarbu = '';        // sur 100 = au plein
  private $_vitesse = '';        // vitesse de pointe     
  private $_consomation = '';  //en Litre et en un km/h
  private $_kilometrage = ''; //Km  

  public function getMarque()
  {
   return $this->_marque;
  }
}

