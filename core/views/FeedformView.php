<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 21.05.2017
 * Time: 20:54
 */

namespace core\views;


class FeedformView
{
        function __construct($path)
        {
            require $path."/templates/header.php";
            require $path."/templates/feedbackform.php";
            require $path."/templates/footer.php";
        }
}