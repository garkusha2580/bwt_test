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
    private $libPath = dirname(__FILE__);
    private $libs = [];

    function render()
    {
        // TODO: Implement render() method.
    }

    private function connectLibs()
    {

    }

}