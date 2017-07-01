<?php
/**
 * Created by PhpStorm.
 * User: NZOle
 * Date: 1/07/2017
 * Time: 3:20 PM
 */

namespace App\Controllers;


use App\View;

class News
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function action($action){
        $methodName = 'action'.$action;
        $this->beforeAction();
        return $this->$methodName();
    }

    public function beforeAction(){

    }

    protected function actionIndex(){
        $this->view->news = \App\Models\News::findAll();
        $this->view->title = 'Hey, you!';

        $this->view->display(__DIR__.'/../templates/index.php');
    }
}