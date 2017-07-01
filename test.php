<?php


require __DIR__. '/autoload.php';

$news = \App\Models\News::findAll();
var_dump($news[2]->author);
