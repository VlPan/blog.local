<?php

//Магический метод __autoload - автозагрузка

function __autoload($class){
    require __DIR__ . '/' . str_replace('\\','/',$class) . '.php'; //1arg - what to change, 2arg - change for what, 3arg-where to change
}
