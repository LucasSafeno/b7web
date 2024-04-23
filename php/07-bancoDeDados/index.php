<?php
require("config.php");
$lista = [];
$sql = $pdo->query("SELECT * FROM usuarios");
if ($sql->rowCount() > 0) {
  $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
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
      <td><?= $usuario['id']; ?></td>
      <td><?= $usuario['nome']; ?></td>
      <td><?= $usuario['email']; ?></td>
      <td>
        <a href="editar.php?id=<?= $usuario['id']; ?>">[EDITAR]</a>
        <a href="excluir.php?id=<?= $usuario['id']; ?>">[EXCLUIR]</a>
      </td>
    </tr>

  <?php endforeach; ?>
</table>