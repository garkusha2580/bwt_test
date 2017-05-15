<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 15.05.2017
 * Time: 19:40
 */
spl_autoload_register();
use core\Router,core\params\Routes;
$init = new Router(new Routes());
$init->start();

