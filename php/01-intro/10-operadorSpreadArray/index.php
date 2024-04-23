<?php
$bolo1 = [
  "Açucar",
  "Farinha de Trigo",
  "Ovos",
  "Leite",
  "Fermento em pó"
];


$bolo2 = [
  ...$bolo1,
  "Corante"
];

//print_r($bolo2);

echo $bolo2[5];
