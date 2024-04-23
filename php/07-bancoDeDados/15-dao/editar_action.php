<?php
require("config.php");
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);


$nome = $_POST['nome'];
$email = $_POST['email'];
$id = $_POST['id'];

if ($id) {

  //  $usuario = $usuario->findById($id);
  $usuario = new Usuario();
  $usuario->setId($id);
  $usuario->setNome($nome);
  $usuario->setEmail($email);

  $usuarioDao->update($usuario);

  header("Location: index.php");
  exit;
} else {
  header("Location: editar.php?id" . $id);
  exit;
}
