<?php

class Counter implements Countable {

  public $_myCount = 3;

  public function __construct() {
      return $this->_myCount;
  }

  public function count()
  {
    return $this->_myCount;
  }

}

$counter = new Counter();
var_dump(count($counter)); exit;
