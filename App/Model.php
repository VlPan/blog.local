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

    static function findAll($params = [])
    {
        $db = new Db();
        return $db->query('SELECT * FROM ' . static::TABLE . ' WHERE id = :id',
            static::class,$params //static::class превратится в имя класса где мы вызовем этот метод!!!
        );
    }

    static function findById($id){
        $db = new Db();
        return $db->query('SELECT * FROM ' . static::TABLE . " WHERE id = '$id'",
            static::class
        );
    }

}