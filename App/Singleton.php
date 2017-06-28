<?php
/**
 * Created by PhpStorm.
 * User: NZOle
 * Date: 13/06/2017
 * Time: 12:15 PM
 */

namespace App;


trait Singleton
{
    protected static $instance;
    protected function __construct()
    {

    }
    public static function instance(){
        if (null === static::$instance)
            static::$instance = new static;
        return static::$instance;
    }

}