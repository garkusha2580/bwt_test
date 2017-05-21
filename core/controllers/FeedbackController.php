<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 18.05.2017
 * Time: 22:30
 */

namespace core\controllers;


use core\controllers\AbsController\MomController;
use core\models\FeedModel;

class FeedbackController extends MomController
{

    public function init()
    {
        static::$model = new FeedModel();
        $_POST["feeds"] = static::$model->begin("select", [':preview' => 0, ':paginate' => 5]);
        static::$view->render("feeds");

    }

    public function viewFeed($id=null)
    {
        static::$model = new FeedModel();
        $_POST["feed"]=static::$model->begin("selectAlone",[':id'=>$id]);
        static::$view->render("Singlefeed");
    }
}