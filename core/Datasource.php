<?php

class Datasource {

  public $connection = null;
  public $config = [];

  public function __construct()
  {
      $app = include CONFIG. DS . 'app.php';

      $this->config = $app['database'];

      try {
        $this->connection = new PDO('mysql:host=localhost;dbname=core_blog',$this->config['username'],$this->config['password']);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
        die('ERROR:'. $e->getMessage());
      }
  }

  public function query()
  {
    return $this;
  }

}
