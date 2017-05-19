<?php

/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 19.05.2017
 * Time: 16:42
 */
use \core\models\AbsModel\MomModel;

class FeedModel extends MomModel
{
    protected function begin(array $params=null)
    {
        // TODO: Implement Begin() method.
        $this->getFeeds($params);
    }
    private function getFeeds(array $data){

    }

}