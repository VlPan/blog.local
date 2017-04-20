<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.04.2017
 * Time: 16:21
 */

namespace App;


class Db
{
    protected $dbh;
    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=blog','mysql','mysql');
    }

}