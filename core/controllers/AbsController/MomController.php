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

class MomController
{
    protected $view = null;

    public function __construct()
    {
        $this->view = new viewController();
    }

    protected function redirect($data)
    {
        $router = new Router(new Routes());
        $router->start();
    }
}