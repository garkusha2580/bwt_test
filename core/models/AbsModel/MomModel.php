<?php

/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 18.05.2017
 * Time: 22:34
 */
namespace core\models\AbsModel;

use core\models\QueryMaster;

/**
 * Class MomModel
 * @package core\models\AbsModel
 * тут я немного извратился
 * у каждой модели есть ссылка на синглтон мастера запросов(PDO)
 * которму задаються базовые мотоды поведения данной модели и соответственно
 * передача параметров в эти запросы
 */
abstract class MomModel
{

    static protected $queryMaster;

    public function begin ( $type , array $params = null )
    {
        static::$queryMaster = QueryMaster::instance ();
        static::$queryMaster->setParams ( $this->query () );
        return static::$queryMaster->getQuery ( $type , $params );
    }

    abstract protected function query ();
}