<?php

namespace App\Models;

use App\Model;

class Categories extends Model
{
    const TABLE = 'categories';

    public $id;
    public $name;
}