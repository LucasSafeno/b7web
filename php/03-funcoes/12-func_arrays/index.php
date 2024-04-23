<?php
$lista = ["nome1", "nome2", "nome3", "nome4"];


echo "<br> ##### Contar elementos #### <br>";
echo "TOTAL : " . count($lista);

echo "<br>##### Pega diferença. #####<br>";
$lista2 = ["Lucas", "Thauanna", "Jose", "Maria"];
$aprovados = ["Lucas", "Thauanna"];
$reprovados = array_diff($lista2, $aprovados);
print_r($reprovados);

echo "<br>##### Filtrar algo no array #####<br>";
$numeros = [10, 20, 24, 91, 18];
$filtrados = array_filter($numeros, function ($item) {
  if ($item < 30) {
    return true;
  } else {
    return false;
  }
});
print_r($filtrados);
echo "<br>##### Executar algo no array #####<br>";
$numeros = [10, 20, 24, 91, 18];
$dobrados = array_map(function ($item) {
  return $item * 2;
}, $numeros);
print_r($dobrados);


echo "<br>##### Remove ultimo item do array #####<br>";
$numeros = [10, 20, 24, 91, 18];
print_r($numeros);
echo "<br>";
array_pop($numeros);
print_r($numeros);

echo "<br>##### Remove primeiro item do array #####<br>";
$numeros = [10, 20, 24, 91, 18];
print_r($numeros);
echo "<br>";
array_shift($numeros);
print_r($numeros);

echo "<br>##### Buscar algo no array #####<br>";
$numeros = [10, 20, 24, 91, 18];
if (in_array(90, $numeros)) {
  echo "Existe";
} else {
  echo "não existe";
}

echo "<br>##### Busca dentro do array. array_seach (retorna posição) #####<br>";
$numeros = [10, 20, 24, 91, 18];
$pos = array_search(91, $numeros);
echo $pos;


echo "<br>##### Ordenar array (crescente) #####<br>";
$numeros = [10, 20, 24, 91, 18];
sort($numeros);
print_r($numeros);

echo "<br>##### Ordenar array (decrescente) #####<br>";
$numeros = [10, 20, 24, 91, 18];
rsort($numeros);
print_r($numeros);


echo "<br>##### Transformar em string #####<br>";
$nomes = ["Lucas", "Gomes", "Tenório"];
$nome = implode(' ', $nomes);
echo $nome;
