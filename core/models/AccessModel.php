<?php

/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 17.05.2017
 * Time: 23:55
 */
use core\models\AbsModel\MomModel;

class AccessModel extends MomModel
{

    protected function query()
    {
        return ["select" => "SELECT id FROM Main WHERE Login=:Login AND Pass=:Pass ",
            "insert" => "INSERT INTO Main(Login,Pass,created)VALUES (:Login,:Pass,:created)"];
    }
}