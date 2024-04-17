<?php
echo "<br> #### Limpar espaços #### <br>";
$nome = '    Lucas   ';
echo trim($nome);
echo "<br>";

echo "<br> #### Contar Caracteres #### <br>";
$nomeSujo = '    Lucas   ';
$nomeLimpo = trim($nomeSujo);
echo "NOME SUJO : " . strlen($nomeSujo) . "<br>";
echo "Nome limpo : " . strlen($nomeLimpo);
echo "<br>";

echo "<br> #### Tudo menusculo #### <br>";
$nome = 'Lucas Tenório';
echo strtolower($nome);
echo "<br>";

echo "<br> #### Tudo maisculo #### <br>";
$nome = 'Lucas Tenório';
echo strtoupper($nome);
echo "<br>";


echo "<br> #### Substituir palavra #### <br>";
$nome = 'Lucas Tenório';
$nomeAlterado = str_replace('Lucas', 'Teste', $nome);
echo $nomeAlterado;
echo "<br>";


echo "<br> #### Retornar parte de ums string #### <br>";
$nomeCompleto = 'Lucas Tenório';
$nome = substr($nomeCompleto, 0, 3);
echo $nome;
echo "<br>";

echo "<br> #### Retorna a posição de um caractere #### <br>";
$nomeCompleto = 'Lucas Tenório';
$posicao = strpos($nomeCompleto, 's');
echo $posicao;
echo "<br>";


echo "<br> #### Primeira letra em maiscula #### <br>";
$nomeCompleto = 'lucas tenório';
echo ucfirst($nomeCompleto);
echo "<br>";
echo ucwords($nomeCompleto);
echo "<br>";


echo "<br> #### Transformar string em array #### <br>";
$nomeCompleto = 'lucas gomes Tenório Cavalcanti';
$nomes = $nomeCompleto = explode(' ', $nomeCompleto);
print_r($nomes);
echo "<br>";


echo "<br> #### Formatar numeros #### <br>";
$numero = 12913.12;
echo 'R$:' . number_format($numero, 2, ',', '.');
echo "<br>";
