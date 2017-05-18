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
        foreach ($this->routs as $patt => $rout) {
            if (preg_match("~$patt~",$rout)) {
                $intRoute = preg_replace("~$patt~", $rout, $uri);
                $segments = explode("@", $intRoute);
                $controller = array_shift($segments);
                $action = array_shift($segments);
                $params = $segments;
                $name = "core\\controllers\\" . $controller;
                $containerFile = new $name();
                if (($containerFile instanceof MomController)) {
                    if (method_exists($name, $action)) {
                        call_user_func([$name, $action], $params);
                        $status = 200;
                    }
                }
            }
        }
        if ($status == 404) {
            ErrController::err404();
        }
        return;

    }

}