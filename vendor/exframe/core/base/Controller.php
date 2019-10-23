<?php

namespace exframe\core\base;

abstract class Controller
{
    public $route = [];
    public $view;
    public $layout;
    public $params;

    /**
     * метаданные страницы
     * @var array
     */
    public $meta = [];

    /**
     * пользовательские данные
     * @var array
     */
    public $data = [];

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = $route['action'];
        if (isset($route['params'])) {
            $this->params = $route['params'];
            // Вызываем ошибку если параметры добавлены не в тот контроллер
            if ($route['params'] && $route['controller'] != 'Catalog') {
                throw new \Exception("Страница не найдена", 404);
            }
        }
        // Не устанавливаем лейаут из куков, если находимся в админке
        if (strpos($route['prefix'], 'admin') === FALSE) {
            $this->checkLayoutCookie();
        }
    }

    public function getView()
    {
        $vObj = new View($this->route, $this->layout, $this->view);
        $vObj->render($this->data);
    }

    public function set($data)
    {
        $this->data = $data;
    }

    protected function setMeta($title = '', $desc = '', $keywords = '')
    {
        $this->meta['title'] = $title;
        $this->meta['desc'] = $desc;
        $this->meta['keywords'] = $keywords;

    }

    protected function checkLayoutCookie()
    {
        if (isset($_COOKIE['layout'])) {
            $this->layout = $_COOKIE['layout'];
            return true;
        }
        return false;
    }
}
