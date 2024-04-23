<?php
interface DBConnection
{
  public function connect();
}
class MySQLConnection implements DBConnection
{
  public function connect()
  {
  }
}

class OracleConnection implements DBConnection
{
  public function connect()
  {
  }
}


class UsuarioDao
{
  private $db;
  public function __construct(DBConnection $dbCon)
  {
    $this->db = $dbCon;
  }
}

$dbCon = new MySQLConnection();
$usuadioDao = new UsuarioDao($dbCon);
