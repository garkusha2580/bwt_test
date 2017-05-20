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
    private $params = [
        "home" => ["HomeController@init","get"],
        "weather" => ["WeatherController@init","get"],
        "feeds" => ["FeedbackController@init","get"],
        "register" => ["RegisterController@init","get"],
        "" => ["HomeController@init","get"]
    ];

    public function getParams()
    {
        return $this->params;
    }
}