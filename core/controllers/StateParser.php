<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 23.05.2017
 * Time: 23:04
 */

namespace core\controllers;

use Sunra\PhpSimple\HtmlDomParser;


//Парсер страницы для погоды

class StateParser
{

    public static function data($mass)
    {
        $html = HtmlDomParser::file_get_html("https://www.gismeteo.ua/weather-zaporizhia-5093/");
        for ($i = 0; $i < 4; $i++) {
            $mass[$i]["dayTime"] = strip_tags(trim($html->find('div[class=wsection wdata] tr.wrow th ')[$i]));
            $mass[$i]["weather"] = strip_tags(trim($html->find('div[class=wsection wdata] tr.wrow td.cltext ')[$i]));
            $mass[$i]["temp"] = strip_tags(trim($html->find('div[class=wsection wdata] tr.wrow td.temp span[class=c]')[$i]));
            $mass[$i]["pressure"] = strip_tags(trim($html->find('div[class=wsection wdata] tr.wrow span.torr ')[$i]))." mm";
            $mass[$i]["wind"].= strip_tags(trim($html->find('div[class=wsection wdata] tr.wrow dt ')[$i]));
            $mass[$i]["wind"].= " ".strip_tags(trim($html->find('div[class=wsection wdata] tr.wrow span.m_wind ')[$i]))."м/с";
        }
        return $mass;
    }
}