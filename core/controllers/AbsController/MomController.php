<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 15.05.2017
 * Time: 20:53
 */

namespace core\controllers\AbsController;


use core\params\Routes;
use core\Router;
use core\views\viewController;

abstract class MomController
{
   protected static  $view = null;

    protected function redirect($data)
    {
        $router = new Router(new Routes());
        $router->start();
    }

    private function create_View()
    {
        return viewController::get();
    }

    abstract public function init();

    public function __construct()
    {
        static::$view = $this->create_View();
    }

    public function __call($name, $arguments)
    {
        return false;
    }
}