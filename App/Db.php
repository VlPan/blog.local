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
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=blog', 'mysql', 'mysql');
    }

    public function execute($sql,$params=[])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        return $res;
    }

    public function query($sql, $class,$params=[])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
//            echo $sql;
        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class); //Вернуть обьект типа             $class
        }
        return [];
    }

}