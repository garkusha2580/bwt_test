<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 20.05.2017
 * Time: 20:32
 */

namespace core\views;


class feedsView
{
    function __construct($path)
    {
        require $path . "/templates/header.php";
        require $path . "/templates/feeds.php";
        require $path . "/templates/footer.php";
    }
}