<?php

namespace core\params;

/**
 * Class Routes
 * @package core\params
 * Роутинги
 */
class Routes
{
    private $ways = [
        "weather" => ["WeatherController/init" , "get"] ,                     // отрисовка погоды
        'feeds/view/([0-9+])' => ['FeedbackController/viewFeed/$1' , "get"] , // отрисовка конкретной новости
        'addform' => ['FeedbackController/showForm' , "get"] ,                // отрисовка формы добовления новостей
        'adding' => ['FeedbackController/addFeed' , "post"] ,                 // процесс добавления в БД
        "feeds" => ["FeedbackController/init" , "get"] ,                      // отрисовка всех новостей
        "auth" => ["RegisterController/auth" , "get"] ,                       // отрисовка формы авторизации
        "setAuth" => ["RegisterController/setAuth" , "post"] ,                // процесс авторизации
        "register" => ["RegisterController/init" , "get"] ,                   // отрисовка формы регистрации
        "register/begin" => ["RegisterController/register" , "post"] ,        // процесс регистрации
        "logout" => ["RegisterController/logout" , "get"] ,                   // процесс выхода
        "home" => ["HomeController/init" , "get"] ,                           // отрисовка главной страницы
        "verify" => ["RegisterController/captchaVerify" , "post"] ,           // проверка капчи
        "" => ["HomeController/init" , "get"] ,                               // отрисовка главной страницы
    ];

    public function getParams ()
    {
        return $this->ways;
    }
}