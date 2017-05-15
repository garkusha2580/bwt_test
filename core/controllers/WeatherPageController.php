<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 15.05.2017
 * Time: 20:28
 */

namespace core\controllers;

use core\controllers\AbsController\MomController;

class MainController extends MomController
{
    function action_init($url = null)
    {
       echo "ok";
    }
}