<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 15.05.2017
 * Time: 19:55
 */

namespace core\params;


class Routes
{
    private $params=[
        "home"=>"index"
    ];
    public function __construct()
    {
        return $this->params;
    }
}