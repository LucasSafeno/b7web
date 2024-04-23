<?php
require "vendor/autoload.php";


use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('teste.log', Level::Warning));



use classes\matematica\Basica;

$m = new Basica();
echo $m->somar(3, 7);


// add records to the log
$log->warning('Foo');
$log->error('Bar');
