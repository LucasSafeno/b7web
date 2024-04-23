<?php
// $hash = '$2y$10$Hi77hQ1FURcvPnfsJ8eC2eOxzHE11y8iWJtbio6OwNCcISyY4V3fG';
// $senha = '123';

// if (password_verify($senha, $hash)) {
//   echo 'Senha correta';
// } else {
//   echo 'Senha errada';
// }


$hash = '202cb962ac59075b964b07152d234b70';
$senha = '123';

if (md5($senha) == $hash) {
  echo 'Senha Correta';
} else {
  echo 'Senha incorreta';
}
