<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 19.05.2017
 * Time: 17:11
 */

namespace core\views;


class registerView
{
    function __construct($path)
    {
        require $path."/templates/header.php" ;
        require $path . "/templates/regform.php";
        require $path . "/templates/footer.php";
    }
}