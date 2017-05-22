<?php

/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 17.05.2017
 * Time: 23:55
 */
namespace core\models;

use core\models\AbsModel\MomModel;


class AccessModel extends MomModel
{

    protected function query()
    {
        return ["select" => "SELECT id FROM Main WHERE Login=:Login AND Pass=:Pass ",
            "insert" => "INSERT INTO Main(Login,Email,Pass,created) VALUES (:Login,:Pass,:created,:email)",
            "selectSess" => "SELECT * FROM sessions WHERE sess_hash=:hash AND status=FALSE ",
            "insertSess" => "UPDATE sessions SET  status=TRUE WHERE sess_hash=:hash",
            "endSess" => "UPDATE sessions SET  status=FALSE WHERE sess_hash=:hash"];
    }
}