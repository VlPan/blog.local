<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.04.2017
 * Time: 17:03
 */

namespace App\Models;


use App\Model;

class Authors extends Model
{
    const TABLE = 'authors';

    public $id;
    public $name;
}