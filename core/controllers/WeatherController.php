<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 17.05.2017
 * Time: 18:04
 */

namespace core\controllers;


use core\controllers\AbsController\MomController;

class WeatherController extends MomController
{

    public function init()
    {
        // TODO: Implement action_Init() method.
        static::$view->render("weather");
    }
}