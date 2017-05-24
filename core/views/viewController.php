<?php

/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 16.05.2017
 * Time: 21:00
 */
namespace core\views;


/**
 * Class viewController
 * @package core\views
 * контроллер всех представлений на сайте
 * синглтон
 * отдаёт необходимое представлени(там немного не лаконично)
 * и сами представления
 */

class viewController
{
    protected static $pattern;
    private static $obj = null;
    private $path;
    private $cssLibs = [];
    private $jsLibs = [];

    private function __construct()
    {
        $this->path = dirname(__FILE__);
    }

    public static function get()
    {
        if (is_null(self::$obj)) {
            self::$obj = new self();
        }
        return self::$obj;
    }

    public function render($data)
    {
       $this->$data();
    }
    public function __call($name, $arguments)
    {
        return false;
    }
    protected function home()
    {
        self::$pattern = new MainView($this->path);
    }
    protected function weather()
    {
        self::$pattern = new WeatherView($this->path);
    }
    protected function register()
    {
        self::$pattern = new RegisterView($this->path);
    }
    protected function feeds()
    {
        self::$pattern = new feedsView($this->path);
    }
    protected function singleFeed()
    {
        self::$pattern = new singleFeedView($this->path);
    }
    protected function form()
    {
        self::$pattern = new FeedformView($this->path);
    }
    protected function authForm()
    {
        self::$pattern = new AuthFormView($this->path);
    }
}