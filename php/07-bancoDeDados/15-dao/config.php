<?php
$db_name      = "dao";
$db_user      = "root";
$db_password  = "root";
$db_host      = "localhost";

$pdo = new PDO("mysql:dbname=" . $db_name . ";host=" . $db_host, $db_user, $db_password);
