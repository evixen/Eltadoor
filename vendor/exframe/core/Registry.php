<?php

namespace exframe\core;

class Registry
{
    static public $objects = [];
    static public $instance;

    protected function __construct()
    {
        require_once ROOT . '/config/config.php';
        foreach ($config['components'] as $name => $component) {
            self::$objects[$name] = new $component;
        }
    }

    static public function instance()
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function getList()
    {
        echo "<pre>";
        var_dump(self::$objects);
        echo "</pre>";
    }

    public function __get($name)
    {
        if (is_object(self::$objects[$name])) {
            return self::$objects[$name];
        }
    }

    public function __set($name, $object)
    {
        if (!isset(self::$objects[$name])) {
            self::$objects[$name] = new $object;
        }
    }
}
