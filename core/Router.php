<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 15.05.2017
 * Time: 19:54
 */

namespace core;


use core\controllers\AbsController\MomController;
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
        foreach ($this->routs as $patt => $rout) {
            if (preg_match("~$patt~", $uri)) {
                $intRoute = preg_replace("~$patt~", $rout, $uri);
                $segments = explode("/", $intRoute);
                $controller = ucfirst(array_shift($segments)) . "Controller";
                $act = "action_" . ucfirst(array_shift($segments));
                $params = $segments;
                $name = "core\\controllers\\" . $controller;
                $contrFile = new $name;
                if (!($contrFile instanceof MomController)) {
                    header("HTTP/1.0 404 Not Found");
                }
                call_user_func([$name, $act], $params);
                $status=200;
            }
        }
        if ($status == 404) {
            header("HTTP/1.0 404 Not Found");

        }
        return;

    }

}