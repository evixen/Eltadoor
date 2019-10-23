<?php
namespace exframe\core\base;

class View
{
    /**
     * текущий маршрут и параметры (controller, action, params)
     * @var array
     */
    public $route = [];

    /**
     * текущий вид
     * @var string
     */
    public $view;

    /**
     * текущий шаблон
     * @var string
     */
    public $layout;

    public function __construct($route, $layout = '', $view = '')
    {
        $this->route = $route;
        $this->layout = $layout ?: LAYOUT;
        $this->view = $view;
    }

    public function render($data)
    {
        if (is_array($data)) extract($data);

        // заменяем обратный слэш прямым для корректного пути в Linux системах
        $this->route['prefix'] = str_replace('\\', '/', $this->route['prefix']);

        $file_view = APP . "/views/{$this->route['prefix']}{$this->route['controller']}/{$this->view}.php";
        ob_start();
        if (is_file($file_view)) {
            require_once $file_view;
        } else {
            throw new \Exception("<p>Не найден вид <b>$file_view</b></p>", 404);
        }
        $content = ob_get_clean();

        $file_layout = APP . "/views/layouts/{$this->layout}.php";
        if (is_file($file_layout)) {
            require_once $file_layout;
        } else {
            throw new \Exception("<p>Не найден шаблон <b>$file_view</b></p>", 404);
        }
    }
}
