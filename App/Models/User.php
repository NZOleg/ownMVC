<?php
/**
 * Created by PhpStorm.
 * User: NZOle
 * Date: 8/06/2017
 * Time: 11:25 AM
 */

namespace App\Models;

use App\Db;
use App\Model;

class User extends Model implements HasEmail
{
    const TABLE = 'users';

    public $email;
    public $name;


}