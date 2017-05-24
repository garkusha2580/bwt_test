<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 23.05.2017
 * Time: 14:20
 */

namespace core\controllers\middleware;
/*
 * Посредник для проверки прав доступа для некоторых страниц
 * сам доступ делал на куках
 */

use core\controllers\ErrController;
use core\models\AccessModel;

class AccessChecker
{
    public static function auth()
    {
        if (empty($_COOKIE["status"])) {
            ErrController::authLocate();
        }
        $model = new AccessModel();
        $result = $model->begin("selectSess", [":hash" => $_COOKIE["status"], ":status" => TRUE]);
        if (isset($result["id"])) {
            $model->begin("updateSessById", [":status" => FALSE, ":id" => $result["id"]]);
            ErrController::authLocate();
            return;
        }
    }

}