<?php
namespace core\controllers;

use core\controllers\AbsController\MomController;
use core\controllers\middleware\AccessChecker;
use core\controllers\StateParser;

class WeatherController extends MomController
{

    public function init()
    {
        AccessChecker::auth();
         $data = array();
        $_POST["weatherData"] = StateParser::data($_POST["weatherData"]);
        static::$view->render("weather");


    }
}