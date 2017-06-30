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
    public $id;

    public static function findAll(){
        $db = Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
    }
    public function isNew(){
        return empty($this->id);
    }

    public function insert(){
        if (!$this->isNew()){
            return;
        }

        $columns = [];
        $values = [];

        foreach ($this as $k =>$v){
            if ($k == 'id'){
                continue;
            }
            $columns[] = $k;
            $values[':'.$k] = $v;
        }

        $sql = 'INSERT INTO '. static::TABLE. ' ('. implode(',',$columns) . ') VALUES('.implode(',',array_keys($values)).')' ;
        $db = Db::instance();
        $db->execute($sql, $values);
    }

}