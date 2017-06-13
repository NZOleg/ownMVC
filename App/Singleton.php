<?php
/**
 * Created by PhpStorm.
 * User: NZOle
 * Date: 13/06/2017
 * Time: 12:15 PM
 */

namespace App;


class Singleton
{
    protected static $instance;
    protected function __construct()
    {

    }
    public static function instance(){
        if (null === self::$instance)
            self::$instance = new self;
        return self::$instance;
    }

}