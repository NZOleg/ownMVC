<?php
/**
 * Created by PhpStorm.
 * User: NZOle
 * Date: 1/07/2017
 * Time: 2:21 PM
 */

namespace App\Models;


use App\Model;

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
}