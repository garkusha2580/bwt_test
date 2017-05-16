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
    protected $pattern;

    public function render()
    {
        $this->path = dirname(__FILE__);
        $this->pattern = new MainView($this->path);
    }
    public function __construct()
    {
        $this->render();
    }
}