<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 15.05.2017
 * Time: 20:53
 */

namespace core\controllers\AbsController;
/**
 * Мама-конкроллер
 * имеет 2 статик. свойства - для текущией модели и представления
 *
 */

use core\params\Routes;
use core\Router;
use core\views\viewController;

/**
 * Class MomController
 * @package core\controllers\AbsController
 */
abstract class MomController
{
    /**
     * @var null
     */
    protected static $view = null;
    /**
     * @var null
     */
    protected static $model = null;

    /**
     * @param $data
     */
    protected function redirect( $data)
    {
        $router = new Router(new Routes());
        $router->start();
    }

    /**
     * @return viewController|null
     */
    private function create_View()
    {
        return viewController::get();
    }

    /**
     * @return mixed
     */
    abstract public function init();

    /**
     * MomController constructor.
     */
    public function __construct()
    {
        static::$view = $this->create_View();
    }

    /**
     * @param $name
     * @param $arguments
     * @return bool
     */
    public function __call( $name, $arguments)
    {
        return false;
    }
}