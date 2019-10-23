<?php

namespace exframe\core;

class Router
{
    static protected $routes = [];
    static protected $route = [];

    static public function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }

    static public function getRoutes()
    {
        return self::$routes;
    }

    static public function getRoute()
    {
        return self::$route;
    }

    static protected function matchRoute($url)
    {
        foreach (self::$routes as $pattern => $route) {
            if (preg_match("~$pattern~i", $url, $matches)) {
                foreach ($matches as $key => $value) {
                    if (is_string($key)) {
                        $route[$key] = $value;
                    }
                }
                if (!isset($route['action'])) {
                    $route['action'] = 'index';
                }
                // prefix for admin controllers
                if (!isset($route['prefix'])) {
                    $route['prefix'] = '';
                } else {
                    $route['prefix'] .= '\\';
                }

                $route['controller'] = self::upperCamel($route['controller']);
                self::$route = $route;
                return true;
            }
        }
        return false;
    }

    /**
     * перенаправляет URL по корректному маршруту
     * @param  string $url входящий url
     * @return void
     * @throws
     */
    static public function dispatch($url)
    {
        $url = self::removeQueryString($url);
        if (self::matchRoute($url)) {
            $controller = 'app\controllers\\' . self::$route['prefix'] . self::upperCamel(self::$route['controller']) . 'Controller';
            if (class_exists($controller)) {
                $cObj = new $controller(self::$route);
                $action = self::lowerCamel(self::$route['action']) . 'Action';
                if (method_exists($cObj, $action)) {
                    $cObj->$action();
                    $cObj->getView();
                } else {
                    throw new \Exception("Метод <b>$controller::$action</b> не найден", 404);
                }
            } else {
                throw new \Exception("Контроллер <b>$controller</b> не найден", 404);
            }
        } else {
            throw new \Exception("Страница не найдена", 404);
        }

    }

    /**
     * удаляет дефис в строке и переводит в верхний регистр первый символ
     * @param  string $name изменяемая стрка
     * @return string измененная строка
     */
    static protected function upperCamel($name)
    {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $name)));
    }

    /**
     * переводит в нижний регистр первый символ строки
     * @param  string $name изменяемая стрка
     * @return string измененная строка
     */
    static protected function lowerCamel($name)
    {
        return lcfirst(self::upperCamel($name));
    }

    /**
     * отрезает от урла явные GET-параметры
     * @param  string url-запрос
     * @return string строка с неявными GET-параметрами
     */
    static protected function removeQueryString($url)
    {
        if ($url) {
            $params = explode('&', $url);
            if (false === strpos($params[0], '=')) {
                return rtrim($params[0], '/');
            } else {
                return '';
            }
        }
    }
}
