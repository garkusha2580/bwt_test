<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 15.05.2017
 * Time: 20:53
 */

namespace core\controllers\AbsController;


use core\views\viewController;

class MomController
{
    protected $view;

    function __construct()
    {
        $this->view = new viewController();
    }

}