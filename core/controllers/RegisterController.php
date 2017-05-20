<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 18.05.2017
 * Time: 22:55
 */

namespace core\controllers;


use core\controllers\AbsController\MomController;

class RegisterController extends MomController
{
    public function init()
    {
        static::$view->render("register");
    }

    public function register()
    {

    }
}