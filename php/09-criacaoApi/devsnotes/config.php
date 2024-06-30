<?php
$db_host  = "localhost";
$db_name  = "devsnotes";
$db_user  = "root";
$db_pass  = "root";

$pdo = new PDO("mysql:dbname=$db_name;localhost=$db_host", $db_user, $db_pass);
$array = [
  'error' => '',
  'result' => []
];
