<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 15.05.2017
 * Time: 19:54
 */

namespace core;


use core\controllers\AbsController\MomController;
use core\controllers\ErrController;
use core\params\Routes;

class Router
{

    private $routs = array();

    public function __construct(Routes $data)
    {
        $this->routs = $data->getParams();
    }

    private function uriGetting()
    {
        if (!empty($_SERVER["REQUEST_URI"])) {
            return trim($_SERVER["REQUEST_URI"], '/');
        }
        if (!empty($_SERVER["PATH_INFO"])) {
            return trim($_SERVER["PATH_INFO"], '/');
        }
        if (!empty($_SERVER["QUERY_STRING"])) {
            return trim($_SERVER["QUERY_STRING"], '/');
        }
    }

    public function start()
    {
        $status = 404;
        $uri = $this->uriGetting();
        $method = strtolower($_SERVER["REQUEST_METHOD"]);
        foreach ($this->routs as $pattern => $rout) {
            if (preg_match("~$pattern~", $uri) && ($rout[1] === $method)) {
                $intRoute = preg_replace("~$pattern~", $rout[0], $uri);
                $segments = explode("/", $intRoute);
                $controller = ucfirst(array_shift($segments));
                $action = ucfirst(array_shift($segments));
                $name = "core\\controllers\\" . $controller;
                $containerFile = new $name();
                $params = $segments;
                if (($containerFile instanceof MomController)) {
                    if (method_exists($name, $action)) {
                        call_user_func_array([$name, $action], $params);
                        $status = 200;
                        return;
                    }
                }

            }
        }
        $status == 404 ? ErrController::err404() : null;
        return;


    }
}