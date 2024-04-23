<?php
$array = [
  'nome' => 'Lucas',
  'idade' => 29,
  'empresa' => 'AtualTech',
  'cor' => 'Preto',
  'profissao' => 'Programador'
];

if (key_exists('idade', $array)) {
  echo 'Existe <br>';
  $idade = $array['idade'];
  echo $idade;
} else {
  echo 'Não existe';
}
