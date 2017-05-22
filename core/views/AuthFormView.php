<?php

/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 22.05.2017
 * Time: 22:16
 */
namespace core\views;
class AuthFormView
{
    function __construct($path)
    {
        require $path . "/templates/header.php";
        require $path . "/templates/enterForm.php";
        require $path . "/templates/footer.php";

    }
}