<?php
require("config.php");
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$usuario = false;
$id = filter_input(INPUT_GET, 'id');

if ($id) {

  $usuario = $usuarioDao->findById($id);
}
if ($usuario === false) {
  header("Location: index.php");
  exit;
}
?>

<h1>Editar Usuario</h1>

<form action="editar_action.php" method="post">
  <input type="hidden" name="id" value="<?= $usuario->getId(); ?>">
  <label for="nome">Nome:<br>
    <input type="text" name="nome" value="<?= $usuario->getNome(); ?>">
  </label>
  <br><br>

  <label for="email">E-mail:<br>
    <input type="text" name="email" value="<?= $usuario->getEmail(); ?>">
  </label>
  <br><br>

  <input type="submit" value="Editar">
</form>