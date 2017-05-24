<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 17.05.2017
 * Time: 20:28
 */

namespace core\controllers;

/*@class ErrController
 * Класс всех заголовков-ошибок.
 */

class ErrController
{
    public static function err404()
    {
        header("HTTP/1.0 404 Not Found");
    }

    public static function err505()
    {
        header("HTTP/1.0 505 HTTP Version Not Supported");
    }
    public  static function err403()
    {
        header("HTTP/1.0 403 Forbidden");
    }
    private function __construct()
    {
    }
    public  static function locate(){
        header("Location:".$_SERVER["PHP_SELF"]);
    }
    public static function authLocate(){
        header("Location:/auth");
    }
}