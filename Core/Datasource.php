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

  public function getAll()
  {
    return $this;
  }

  public function get()
  {
    return $this;
  }

  public function query()
  {
    return $this;
  }

  public function _conditions($options)
  {
    if (empty($options)) {
      return;
    }

    if (array_key_exists('condition', $options)) {

    }

    if (array_key_exists('order', $options)) {

    }

    if (array_key_exists('limit'), $options) {

    }

  }

  public function find($option = 'all', $options = [])
  {
      $result = [];

      if ($option === 'all') {
        $stmt = $this->connection->prepare('SELECT * FROM :table WHERE :condition ');

        $stmt->execute($options);

        while($row = $stmt->fetch()){
          $result[] = $row;
        }
      } else {

      }

    return $this;
  }

  public function first()
  {
    return $this;
  }

  public function limit($limit = null)
  {

    return $this;
  }


}
