<?php
$array = [
  'nome' => 'Lucas',
  'idade' => 29,
  'empresa' => 'AtualTech',
  'cor' => 'Preto',
  'profissao' => 'Programador'
];

// gera array com as chaves de um array
$chaves = array_keys($array);
print_r($chaves);
echo "<br>";
// gera array com os valores de um array
$valores = array_values($array);
print_r($valores);
