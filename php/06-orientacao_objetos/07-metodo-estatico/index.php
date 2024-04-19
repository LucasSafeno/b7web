<?php
class Matematica
{
  public static string $nome = 'Lucas';

  public static function somar($x, $y)
  {
    return $x + $y;
  }
} // Matematica

// $n = new Matematica();
// echo $n->somar(10, 20);

echo Matematica::somar(20, 30);
echo "<br>";
echo Matematica::$nome;
