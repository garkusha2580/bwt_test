<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 18.05.2017
 * Time: 22:55
 */

namespace core\controllers;


use core\controllers\AbsController\MomController;
use core\models\AccessModel;

class RegisterController extends MomController
{
    public function init()
    {
            static::$view->render("register");
    }

    public function register()
    {
        static::$model = new AccessModel();
        static::$model->begin("insert", [
            ":Login" => $_POST["login"],
            ":created" => date("Y-m-d H:i:s"),
            ":Pass" => crypt($_POST["pass"], "CRYPT_SHA256"),
            ":Email" => $_POST["email"]]);
        echo "ok";
    }

    public function auth()
    {
        static::$view->render("authForm");
    }
}