<?php

/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 16.05.2017
 * Time: 21:00
 */
namespace core\views;


class viewController
{
    private $path;
    private $cssLibs = [];
    private $jsLibs = [];
    protected static $pattern;
    private static $obj = null;

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


}