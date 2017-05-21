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
    protected function query()
    {
        return [
            "select" => 'SELECT * FROM Feeds ORDER BY id DESC LIMIT :preview,:paginate ',
            "insert" => 'INSERT INTO Feeds(Title,Body,PublishDate,Creator) VALUES(:title,:body,:date,:author);',
            "selectAlone" => 'SELECT * FROM Feeds WHERE id = :id',
            "check" => 'SELECT * FROM Feeds WHERE Title=:title AND Body=:body'];

    }

}