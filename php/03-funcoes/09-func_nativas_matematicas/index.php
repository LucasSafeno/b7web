<?php


echo "Valor absoluto de um numero<br>";
$numero = -8.4;
echo abs($numero);

echo "<br>";

echo "<br>";
echo "PI<br>";
echo pi();
echo "<br>";

echo "<br>";
echo "Arredondar para baixo <br>";
$numero2 = 2.7;
echo floor($numero2);
echo "<br>";

echo "<br>";
echo "Arredondar para cima <br>";
$numero2 = 2.7;
echo ceil($numero2);
echo "<br>";


echo "<br>";
echo "Arredondar depender do numero pra CIMA ou pra BAIXO <br>";
$numero3 = 2.2231;
echo round($numero3, 2);
echo "<br>";

echo "<br>";
echo "Aleatório <br>";
echo rand(3, 9);
echo "<br>";

echo "<br>";
echo "Saber numero maior da lista <br>";
$lista = [1, 4, 9, 8];
echo max($lista);
echo "<br>";

echo "<br>";
echo "Saber numero menor da lista <br>";
$lista = [1, 4, 9, 8];
echo min($lista);
echo "<br>";
