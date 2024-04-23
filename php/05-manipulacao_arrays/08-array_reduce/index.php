<?php
// array_reduce - Executa uma função em cada um dos items dentro do array
// $numeros = [1, 2, 3, 4, 5];
// function somar($subtotal, $item)
// {

//   $subtotal += $item;
//   return $subtotal;
// }
// $total = array_reduce($numeros, 'somar');

// echo $total;


$pessoas = [
  ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],
  ['nome' => 'Ciclano', 'sexo' => 'M', 'nota' => 7],
  ['nome' => 'Beltrano', 'sexo' => 'F', 'nota' => 10],
  ['nome' => 'Paulo', 'sexo' => 'M', 'nota' => 8],
  ['nome' => 'Thauanna', 'sexo' => 'F', 'nota' => 9],
  ['nome' => 'Lucas', 'sexo' => 'M', 'nota' => 9]
];

// Total homens
function contar_m($subtotal, $item)
{
  if ($item['sexo'] === 'M') {
    $subtotal++;
  }
  return $subtotal;
}
function soma_m($subtotal, $item)
{
  if ($item['sexo'] === 'M') {
    $subtotal += $item['nota'];
  }

  return $subtotal;
}

$total_m = array_reduce($pessoas, 'contar_m');
$soma_m = array_reduce($pessoas, 'soma_m');
$media_m = $soma_m / $total_m;


echo "Total de Homens : " . $total_m . "<br>";
echo "Soma notas de Homens : " . $soma_m . "<br>";
echo "Média notas dos homens : " . $media_m;
