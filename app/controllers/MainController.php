<?php

namespace app\controllers;


use app\models\Catalog;

class MainController extends \exframe\core\base\Controller
{
    public $model;

    public function indexAction()
    {
        if ($_COOKIE['layout'] == 'classic') {
            $this->view = 'classic';
        }

        $this->model = new Catalog();

//        Формируем массив дверей для слайдера
        $stock = $this->model->allDoors('stock');
        $finished = $this->model->allDoors('finished');
        $doors = array_merge($stock, $finished);
        shuffle($doors);

        $this->setMeta('Добро пожаловать!');
        $meta = $this->meta;
        $this->set(compact('meta', 'doors'));

        if (isset($_POST['layout'])) {
            setcookie('layout', $_POST['layout'], time() + 60 * 60 * 24 * 30, '/');
            unset($_POST['layout']);
            redirect('/');
        }
    }
}
