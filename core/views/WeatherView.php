<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 17.05.2017
 * Time: 18:01
 */

namespace core\views;


class WeatherView
{
    function __construct($path)
    {
        require_once $path . "/templates/header.php";
        require_once $path . "/templates/main.php";
        require_once $path . "/templates/footer.php";
    }
}