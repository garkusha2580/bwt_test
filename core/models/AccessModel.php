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
            "insert" => "INSERT INTO Main(Login,Pass,Created,Email,Birth,Male) VALUES (:Login,:Pass,:created,:email,:birth,:male)",
            "selectSess" => "SELECT id FROM sessions WHERE sess_hash=:hash AND status=:status",
            "viewSess" => "SELECT status FROM sessions WHERE sess_hash=:hash",
            "updateSess" => "UPDATE sessions SET status=:status WHERE sess_hash=:hash",
            "insertSess" => "INSERT INTO sessions(sess_hash,status) VALUES(:hash,:status)",
            "endSess" => "UPDATE sessions SET  status=FALSE WHERE sess_hash=:hash",
            "updateSessById" => "UPDATE sessions SET  status=FALSE WHERE id=:id",
            "checkName" => "SELECT id FROM Main WHERE Login=:Login"];
    }
}