<?php

//ТОЧКА ВХОДА INDEX.PHP
require __DIR__ . '/autoload.php';

//$article = \App\Models\Article::findAll([':id' => '1']);
$article = \App\Models\Article::findById(2);
$categories= \App\Models\Categories::findAll([':id' => '2']);
$authors = \App\Models\Authors::findAll([':id' => '1']);
var_dump($article);




