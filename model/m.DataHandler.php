<?php
class DataHandler
{
  private $host;
  private $dbdriver;
  private $dbname;
  private $username;
  private $password;

  public function __construct($host, $dbdriver, $dbname, $username, $password)
  {
    $this->host = $host;
    $this->dbdriver = $dbdriver;
    $this->dbname = $dbname;
    $this->username = $username;
    $this->password = $password;

    try {
      $this->dbh = new PDO("$this->dbdriver:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
      $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return true;
    } catch (PDOException $e) {
      echo "Connection with " . $this->dbdriver . " failed: " . $e->getMessage();
    }
  }

  public function __destruct()
  {
    $this->dbh = null;
  }

  // public function prepData($sql)
  // {
  //   try {
  //     $stmt = $this->dbh->prepare($sql);
  //     $stmt->execute();
  //     // $stmt->debugDumpParams();
  //   } catch (PDOException $e) {
  //     echo "Error: " . $e;
  //   }
  //   return $stmt;
  // }

  // public function tableNameSanitize($value)
  // {
  //   if (!preg_match('/^[A-Za-z][A-Za-z0-9_]*$/', $value)) {
  //     throw new AppSpecificSecurityException("Possible SQL injection attempt.");
  //   } else {
  //     return $value;
  //   }
  // }

  public function readData($sql)
  {
    $sth = $this->dbh->query($sql)->fetch(PDO::FETCH_ASSOC);
    return $sth;
  }
  public function readsData($sql)
  {
    return $this->dbh->query($sql, PDO::FETCH_ASSOC);
  }

  public function createData($sql)
  {
    $sth = $this->dbh->query($sql);
    return $sth;
  }

  public function updateData($sql)
  {
    $sth = $this->dbh->query($sql);
    return $sth->rowCount();
  }
}
