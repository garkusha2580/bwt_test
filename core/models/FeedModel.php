<?php

/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 19.05.2017
 * Time: 16:42
 */


namespace core\models;

use core\models\AbsModel\MomModel;

class FeedModel extends MomModel
{
    static private $get;

    protected function query()
    {
        return ["select" => "SELECT * FROM Feeds ORDER BY PublishDate ASC LIMIT 0,5",
            "insert" => "INSERT INTO Feeds(Title,Body,PublishDate) VALUES(:title,:body,:date)"];
    }

}