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


    public function getParams()
    {

        return [
            "weather" => ["WeatherController/init", "get"],
            'feeds/view/([0-9+])' => ['FeedbackController/viewFeed/$1', "get"],
            "feeds" => ["FeedbackController/init", "get"],
            "register" => ["RegisterController/init", "get"],
            "home" => ["HomeController/init", "get"],
            "" => ["HomeController/init", "get"],
        ];
    }
}