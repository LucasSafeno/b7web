<?php
// array_splice - modifica a propria array
$array = ['a', 'b', 'c', 'd', 'e', 'f'];

array_splice($array, 1, 1, 'K');

print_r($array);
