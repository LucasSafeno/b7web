<?php
require "config.php";


$name = $_POST['name'];
$email = $_POST['email'];

if (isset($email)) {

  $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
  $sql->bindValue(":email", $email);
  $sql->execute();

  if ($sql->rowCount()  === 0) {
    $sql = $pdo->prepare("INSERT INTO usuarios SET nome = :name, email = :email");
    $sql->bindValue(":name", $name);
    $sql->bindValue(":email", $email);
    $sql->execute();

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
