<?php
$ingredientes = [
  "Açucar",
  "Farinha de Trigo",
  "Ovos",
  "Leite",
  "Fermento em Pó"
];

echo "<h2>Ingredientes</h2>";

echo "<ul>";
foreach ($ingredientes as $chave => $valor) {
  echo "<li>Item : " . ($chave + 1) . " " . $valor . "</li>";
}
echo "</ul>";
