<?php
require("config.php");
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);


$name = $_POST['name'];
$email = $_POST['email'];

if (isset($email)) {

  if ($usuarioDao->findByEmail($email) === false) {
    $novoUsuario = new Usuario();
    $novoUsuario->setNome($name);
    $novoUsuario->setEmail($email);

    $usuarioDao->add($novoUsuario);
    header("Location: index.php");
    exit;
  } else {
    header("Location: adicionar.php");
    exit;
  }
} else {
  header("Location: adicionar.php");
  exit;
}
