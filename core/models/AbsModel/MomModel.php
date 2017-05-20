<?php

/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 18.05.2017
 * Time: 22:34
 */
namespace core\models\AbsModel;
use core\models\QueryMaster;
 abstract class MomModel
{
    static protected $queryMaster;
    abstract protected function begin(array $data=null);
    public function __construct()
    {
        static::$queryMaster=QueryMaster::instance();
    }
 }