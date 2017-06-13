<?php
/**
 * Created by PhpStorm.
 * User: NZOle
 * Date: 11/06/2017
 * Time: 1:37 PM
 */

namespace App;


abstract class Model
{
    const TABLE = '';
    public static function findAll(){
        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
    }
}