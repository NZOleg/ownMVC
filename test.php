<?php


require __DIR__. '/autoload.php';

$authors = \App\Models\News::findAll();
var_dump($authors);
