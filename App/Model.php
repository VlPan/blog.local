<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.04.2017
 * Time: 16:38
 */

namespace App;


abstract class Model
{
    const TABLE = '';

    static function findAll()
    {
        $db = new Db();
        return $db->query('SELECT * FROM ' . static::TABLE,
            static::class //static::class превратится в имя класса где мы вызовем этот метод!!!
        );
    }
}