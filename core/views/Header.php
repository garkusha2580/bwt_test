<?php

/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 15.05.2017
 * Time: 20:01
 */
namespace core\views;

use core\views\abstractView\AbsView\AbsView;

class Header extends AbsView
{
    function render($libs=null)
    {
        // TODO: Implement render() method.
        $this->connectLibs($libs);
    }

    private function connectLibs($libs)
    {

    }

}