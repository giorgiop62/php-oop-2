<?php

class Accessory extends Product
{
  public $taglia;

  public function __construct(Category $_category, $_price, $_id, $_name, $_taglia)
  {
    parent::__construct($_category, $_price, $_id, $_name);

    $this->taglia = $_taglia;
  }


}
