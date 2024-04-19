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