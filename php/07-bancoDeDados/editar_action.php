<?php
require "config.php";


$nome = $_POST['nome'];
$email = $_POST['email'];
$id = $_POST['id'];

if ($id) {
  //UPDATE tabela SET campos WHERE condicao
  $sql = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id");
  $sql->bindValue(":nome", $nome);
  $sql->bindValue(":email", $email);
  $sql->bindValue(":id", $id);
  $sql->execute();

  header("Location: index.php");
  exit;
} else {
  header("Location: index.php");
  exit;
}
