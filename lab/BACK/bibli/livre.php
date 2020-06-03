<?php
class Livre
{
  private $name;           
  private $autheur;   
  private $date; 

  public function getName()
  {
   return $this->name;
  }
  public function getAutheur()
  {
   return $this->autheur;
  }
  public function getDate()
  {
   return $this->date;
  }

  public function setName($name)
  {
    if(!is_string($name)){
        throw new Exception('erreur');
    }
    $this->name = $name;
  }
  public function setAutheur($autheur)
  {
    if(!is_string($autheur)){
        throw new Exception('erreur');
    }
    $this->autheur = $autheur;
  }
  public function setDate($date)
  {
    if(!is_string($date)){
        throw new Exception('erreur');
    }
    $this->date = $date;
  }

}

