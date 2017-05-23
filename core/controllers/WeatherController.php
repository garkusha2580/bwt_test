<?php
namespace core\controllers;

use core\controllers\AbsController\MomController;
use core\controllers\middleware\AccessChecker;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;

class WeatherController extends MomController
{

    public function init()
    {
        AccessChecker::auth();
        $request = new Request("GET", "https://www.gismeteo.ua/weather-zaporizhia-5093/");
        $client = new Client();
        $response = $client->send($request, ['timeout' => 2]);
        static::$view->render("weather");


    }
}