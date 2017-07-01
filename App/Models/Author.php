<?php
/**
 * Created by PhpStorm.
 * User: NZOle
 * Date: 1/07/2017
 * Time: 2:18 PM
 */

namespace App\Models;


use App\Model;

class Author
    extends Model
{
    const TABLE = 'authors';

    public $name;

}