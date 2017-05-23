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
        $data = StateParser::data($data);
        var_dump($data);
        static::$view->render("weather");


    }
}