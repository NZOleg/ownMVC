<?php

require __DIR__. '/autoload.php';

//$controller = new \App\Controllers\News();
//$action = $_GET['action'] ?: 'Index';
//$controller->action($action);

$a = new \App\Collection();
$a[] = 1;
$a[] = 11;
$a[2] = 234;
foreach ($a as $el){
    echo $el;
}
