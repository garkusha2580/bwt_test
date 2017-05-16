<?php

/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 16.05.2017
 * Time: 21:01
 */
namespace core\views;
class MainView
{
    function __construct($path)
    {
        require_once $path . "/templates/header.php";
        require_once $path . "/templates/main.php";
        require_once $path . "/templates/footer.php";
    }
}