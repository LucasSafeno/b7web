<?php
// Função que executa ela mesma.

function dividir($numero)
{
  $metade  = $numero / 2;
  echo $metade . "<br>";
  if ($metade > 0) {
    dividir($metade);
  }
}

dividir(10);
