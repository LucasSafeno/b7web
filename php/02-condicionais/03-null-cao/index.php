<?php
$nome = "Lucas";

$nomeCompleto = $nome;
//$nomeCompleto .= isset($sobrenome) ? $sobrenome : "";
$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;
