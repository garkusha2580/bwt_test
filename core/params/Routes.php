<?php

namespace core\params;


class Routes
{
    private $ways = [
        "weather" => ["WeatherController/init", "get"],
        'feeds/view/([0-9+])' => ['FeedbackController/viewFeed/$1', "get"],
        'addform' => ['FeedbackController/showForm', "get"],
        'adding' => ['FeedbackController/addFeed', "post"],
        "feeds" => ["FeedbackController/init", "get"],
        "auth" => ["RegisterController/auth", "get"],
        "setAuth" => ["RegisterController/setAuth", "post"],
        "register" => ["RegisterController/init", "get"],
        "register/begin" => ["RegisterController/register", "post"],
        "home" => ["HomeController/init", "get"],
        "" => ["HomeController/init", "get"],
    ];

    public function getParams()
    {
        return $this->ways;
    }
}