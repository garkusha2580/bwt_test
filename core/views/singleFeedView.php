<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 21.05.2017
 * Time: 19:44
 */

namespace core\views;


class singleFeedView
{
    function __construct($path)
    {
        require($path . "/templates/header.php");
        require($path . "/templates/singleFeed.php");
        require($path . "/templates/footer.php");
    }

}