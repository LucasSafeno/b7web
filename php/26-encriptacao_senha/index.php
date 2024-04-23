<?php
$senha = '123';
// $hash = password_hash($senha, PASSWORD_DEFAULT);
$hash = md5($senha);

echo "Senha Original :" . $senha . " <br>";
echo "HASH : " . $hash;
