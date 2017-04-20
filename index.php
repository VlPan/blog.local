<?php

//ТОЧКА ВХОДА INDEX.PHP
require __DIR__ . '/autoload.php';
echo 'Hello world!';
$article = \App\Models\Article::findAll();
$categories= \App\Models\Categories::findAll();
$authors = \App\Models\Authors::findAll();
var_dump($article);
var_dump($categories);
var_dump($authors);



