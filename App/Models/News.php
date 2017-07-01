<?php
/**
 * Created by PhpStorm.
 * User: NZOle
 * Date: 1/07/2017
 * Time: 2:21 PM
 */

namespace App\Models;


use App\Model;

class News
    extends Model
{
    const TABLE = 'news';

    public $title;
    public $lead;
    public $author_id;

}