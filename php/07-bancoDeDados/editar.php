<?php
require 'config.php';
$info = array();
$id = filter_input(INPUT_GET, 'id');

if ($id) {
  $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
  $sql->bindValue(":id", $id);
  $sql->execute();

  if ($sql->rowCount() > 0) {
    $info = $sql->fetch(PDO::FETCH_ASSOC);
  } else {
    header("Location: index.php");
    exit;
  }
} else {
  header("Location: index.php");
  exit;
}
?>

<h1>Editar Usuario</h1>

<form action="editar_action.php" method="post">
  <input type="hidden" name="id" value="<?= $info['id']; ?>">
  <label for="nome">Nome:<br>
    <input type="text" name="nome" value="<?= $info['nome'] ?>">
  </label>
  <br><br>

  <label for="email">E-mail:<br>
    <input type="text" name="email" value="<?= $info['email'] ?>">
  </label>
  <br><br>

  <input type="submit" value="Editar">
</form>