<?php
/**
 * Created by PhpStorm.
 * User: NZOle
 * Date: 1/07/2017
 * Time: 3:20 PM
 */

namespace App\Controllers;


use App\MultiException;
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
    protected function actionOne(){
        $id = $_GET['id'];
        $this->view->article = \App\Models\News::findById($id);
        $this->view->display(__DIR__.'/../templates/one.php');
    }
    protected function actionCreate(){
        try {
            $article = new \App\Models\News();
            $article->fill([]);
            $article->save();
        } catch (MultiException $e) {
            $this->view->errors = $e;
        }
        $this->view->display(__DIR__.'/../templates/create.php');
    }
}