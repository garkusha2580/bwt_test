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
    static private $PDO;
    static private $result;
    private $params;

    private function __construct()
    {
        $dns = "mysql:dbname=bwt;host=localhost";
        $name = "root";
        $pass = "";
        self::$PDO = new \PDO($dns, $name, $pass);
    }

    public static function instance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        self::$result = null;
        return self::$instance;
    }

    /**
     * @param mixed $params
     */
    public function setParams($params)
    {
        $this->params = $params;
    }

    public function getQuery($type, array $vars = null)
    {
        $readyQuery = self::$PDO->prepare($this->params[$type]);
        $readyQuery->execute($vars);
        return $readyQuery->fetchAll();
    }

}