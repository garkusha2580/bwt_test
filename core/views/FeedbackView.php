<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 20.05.2017
 * Time: 20:32
 */

namespace core\views;


class FeedbackView
{
    function __construct($path)
    {
        require_once $path . "/templates/header.php";
        require_once $path . "/templates/feeds.php";
        require_once $path . "/templates/footer.php";
    }
}