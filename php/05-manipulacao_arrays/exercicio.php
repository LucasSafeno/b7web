<?php
$array = [
  'nome' => 'Lucas',
  'idade' => 29,
  'empresa' => 'AtualTech',
  'cor' => 'Preto',
  'profissao' => 'Programador'
];

$chaves = array_keys($array);
$valores = array_values($array);

?>
<table border="1">
  <?php foreach ($array as $chave => $valor) : ?>
    <tr>
      <td><b><?= $chave; ?></b></td>
      <td><?= $valor; ?></td>
    </tr>
  <?php endforeach; ?>
</table>

<table border="1">

  <tr>
    <?php foreach ($chaves as $chave) : ?>
      <th> <?= $chave; ?></th>
    <?php endforeach; ?>
  </tr>
  <tr>
    <?php foreach ($valores as $valor) : ?>
      <td><?= $valor; ?></td>
    <?php endforeach; ?>
  </tr>

</table>