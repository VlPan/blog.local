<?php
namespace App\Models;

use App\Model;

class Article extends Model
{
    const TABLE = 'articles'; //Познее статическое свзязывание!!!

    public $id;
    public $title;
    public $text;
    public $category_id;
    public $author_id;
}
