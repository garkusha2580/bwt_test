<?php

/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 20.05.2017
 * Time: 2:00
 */
namespace core\models;

class QueryMaster
{
    static private $instance;

    private function __construct()
    {
        $dns = "mysql:bwt=bwt;host=127.0.0.1";
        $name = "root";
        $pass = "";
        self::$instance = new \PDO($dns, $name, $pass);
    }

    public static function instance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

}