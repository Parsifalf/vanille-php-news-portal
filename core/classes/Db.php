<?php

$defaultConfig = require CONFIG . '/db.php';

require_once CORE . '/func.php';

class Db
{
  protected PDO $conn;
  protected PDOStatement $stmt;

  private static $instance = null;

  private function __construct()
  {
  }

  private function __clone()
  {
  }

  public function __wakeup()
  {
  }



  public static function getInstance()
  {
    if (is_null(self::$instance)) {
      self::$instance = new self();
    }

    return self::$instance;
  }

  public function getConect(array $db_config)
  {
    $dsn = "mysql:host={$db_config['host']};dbname={$db_config['dbname']};charset={$db_config['charset']}";

    try {
      $this->conn = new PDO($dsn, $db_config['username'], $db_config['password'], $db_config['options']);
      return $this;
    } catch (\Throwable $th) {
      abort(500);
    }
  }

  public function query(string $query, array $params = []): self
  {

    try{
      $this->stmt = $this->conn->prepare($query);
      $this->stmt->execute($params);
      return $this;
    }catch(PDOException $ex){
      throw new Exception($ex->getMessage());
    }
  }

  public function fetchAll()
  {
    return $this->stmt->fetchAll();
  }

  public function fetch()
  {
    return $this->stmt->fetch();
  }


  public function findOrFail()
  {
    $res = $this->fetch();

    if (!$res) {
      abort();
    }

    return $this->stmt->fetch();
  }
}

