<?php
require("config.php");
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();

?>


<a href="adicionar.php">Adicionar Usuário</a>
<table border="1" width="100%">
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Email</th>
    <th>Ações</th>
  </tr>
  <?php
  foreach ($lista as $usuario) : ?>
    <tr>
      <td><?= $usuario->getId(); ?></td>
      <td><?= $usuario->getNome(); ?></td>
      <td><?= $usuario->getEmail(); ?></td>
      <td>
        <a href="editar.php?id=<?= $usuario->getId(); ?>">[EDITAR]</a>
        <a href="excluir.php?id=<?= $usuario->getId(); ?>" onclick="return confirm('Você tem certeza que deseja excluir ?')">[EXCLUIR]</a>
      </td>
    </tr>

  <?php endforeach; ?>
</table>