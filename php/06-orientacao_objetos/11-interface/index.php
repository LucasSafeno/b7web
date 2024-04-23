<?php
interface Database
{
  public function listarProdutos();
  public function adicionarProdutos();
  public function alterarProduto();
}

class MysqlDB implements Database
{
  public function adicionarProdutos()
  {
    echo "adicionando com MySQL";
  }

  public function listarProdutos()
  {
    echo "listar com MySQL";
  }

  public function alterarProduto()
  {
    echo "Alterar com MySQL";
  }
}

class OracleDB implements Database
{
  public function listarProdutos()
  {
    echo "listar com Oracle";
  }

  public function adicionarProdutos()
  {
    echo "adicionando com Oracle";
  }

  public function alterarProduto()
  {
    echo "Alterar com Oracle";
  }
}


$db = new OracleDB();
$db->adicionarProdutos();
