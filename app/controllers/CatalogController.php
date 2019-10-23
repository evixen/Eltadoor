<?php

namespace app\controllers;


use app\models\Catalog;
use exframe\core\App;
use exframe\core\base\Controller;

class CatalogController extends Controller
{
    public $model;

    public function __construct($route)
    {
        parent::__construct($route);
        $this->model = new Catalog();
    }

    public function stockAction()
    {
        $table = 'stock';
        if ($this->params) {
            $this->view = 'oneDoor';
            $data = $this->model->oneDoorByParam($table, 'translit = ?', [$this->params]);
            if (!$data) throw new \Exception("Страница не найдена", 404);
        } else {
            $this->view = 'allDoors';
            // Пытаемся получить записи из кэша
            $data = App::$app->cache->get('stockAll');
            if (!$data) {
                $data = $this->model->allDoors($table);
                App::$app->cache->set('stockAll', $data);
            }
        }
        $extra = 'складская программа';
        $this->setMeta('Двери на складе');
        $meta = $this->meta;
        $this->set(compact('data', 'table', 'meta', 'extra'));
    }

    public function finishedAction()
    {
        $table = 'finished';
        if ($this->params) {
            $this->view = 'oneDoor';
            $data = $this->model->oneDoorByParam($table, 'translit = ?', [$this->params]);
            $table = 'finished_full';
        } else {
            $this->view = 'allDoors';
            // Пытаемся получить записи из кэша
            $data = App::$app->cache->get('finishedAll');
            if (!$data) {
                $data = $this->model->allDoors($table);
                App::$app->cache->set('finishedAll', $data);
            }
        }
        $extra = 'готовые решения';
        $this->setMeta('Готовые решения');
        $meta = $this->meta;
        $this->set(compact('data', 'table', 'meta', 'extra'));
    }

    public function toOrderAction()
    {
        $this->view = 'to-order';
        $this->setMeta('Под заказ');
        $meta = $this->meta;
        $this->set(compact('meta'));
    }

    public function medvedevAction()
    {
        $table = 'medvedev';
        $data2k = App::$app->cache->get('medvedev2k');
        if (!$data2k) {
            $data2k = $this->model->findByParam($table, 'WHERE kontur = ?', [2]);
            App::$app->cache->set('medvedev2k', $data2k);
        }

        $data3k = App::$app->cache->get('medvedev3k');
        if (!$data3k) {
            $data3k = $this->model->findByParam($table, 'WHERE kontur = ?', [2]);
            App::$app->cache->set('medvedev3k', $data3k);
        }

        $this->view = 'medvedev';
        $this->setMeta("Двери 'Медведев и Ко'");
        $meta = $this->meta;
        $this->set(compact('data2k', 'data3k', 'meta'));
    }

    public function halesAction()
    {
        $this->view = 'hales';
        $this->setMeta('Межкомнатные двери');
        $meta = $this->meta;
        $this->set(compact('meta'));
    }
}
