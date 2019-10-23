<?php

namespace exframe\core;

class App
{
    static public $app;

    public function __construct()
    {
        session_start();
        self::$app = Registry::instance();
        new ErrorHandler();
    }
}
