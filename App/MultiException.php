<?php
/**
 * Created by PhpStorm.
 * User: NZOle
 * Date: 5/07/2017
 * Time: 1:26 PM
 */

namespace App;


class MultiException
    extends \Exception
    implements  \ArrayAccess, \Iterator
{
    use TCollection;
}