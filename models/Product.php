<?php

class Product 
{
  public $category;
  public $price;
  public $id;
  public $name;

  public function __construct(Category $_category, $_price, $_id, $_name)
  {
    $this->price = $_price;
    $this->id = $_id;
    $this->name = $_name;
    $this->category = $_category;


  }
}