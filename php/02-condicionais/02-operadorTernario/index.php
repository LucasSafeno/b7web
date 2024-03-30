<?php
// () condição ? RESULTADO_POSITIVO  : RESULTADO_NEGATIVO
$idade = 17;
$menorDeIdade =  ($idade >= 18) ? true : false;

if ($menorDeIdade) {
  echo "Verdade";
} else {
  echo "Falso";
}
