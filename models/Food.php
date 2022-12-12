<?php 

class Food extends Product
{
  public $scadenza;
  public $peso;

  public function __construct(Category $_category, $_price, $_id, $_name, $_scadenza, $_peso)
  {
    parent::__construct($_category, $_price, $_id, $_name);
    
    $this -> data = $_scadenza;
    $this -> peso = $_peso;
  
  
  }



}