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
        "home" => "HomeController@init",
        "weather" => "WeatherController@init",
        "feedback"=>"FeedbackController@init",
        "register"=>"RegisterController@init",
        ""=>"HomeController@init"
    ];

    public function getParams(){
        return $this->params;
    }
}