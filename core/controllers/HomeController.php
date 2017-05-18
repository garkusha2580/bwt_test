<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 15.05.2017
 * Time: 21:57
 */

namespace core\controllers;

use core\views\viewController;
use core\controllers\AbsController\MomController;

class HomeController extends MomController
{

    public function init()
    {
        static::$view->render("home");

    }
    public function Data()
    {
        static::$view->render("home");

    }
}