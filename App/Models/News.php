<?php
/**
 * Created by PhpStorm.
 * User: NZOle
 * Date: 1/07/2017
 * Time: 2:21 PM
 */

namespace App\Models;


use App\Model;
use App\MultiException;

/**
 * Class News
 * @package App\Models
 *
 * @property \App\Models\Author $author
 */
class News
    extends Model
{
    const TABLE = 'news';

    public $title;
    public $lead;
    public $author_id;

    /**
     * Lazy Load
     * @param $name
     * @return null
     */
    public function __get($name)
    {
        switch ($name){
            case 'author':
                return Author::findById($this->author_id);
                break;
            default:
                return null;
        }
    }

    public function __isset($name)
    {
        switch ($name){
            case 'author':
                return true;
            default:
                return false;
        }
    }
    public function fill($data = []){
        $e = new MultiException();
        if (true){
            $e[] = new \Exception('Wrong title');
        }
        if (true){
            $e[] = new \Exception('Wrong text');
        }
        throw $e;
    }
}