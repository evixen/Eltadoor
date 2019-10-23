<?php

namespace app\controllers;


class InfoController extends \exframe\core\base\Controller
{
    public function aboutAction()
    {
        $this->setMeta('Добро пожаловать!');
        $meta = $this->meta;
        $this->set(compact('meta'));
    }

    public function confiAction()
    {
        $this->setMeta('Политика конфиденциальности');
        $meta = $this->meta;
        $this->set(compact('meta'));
    }

    public function contactsAction()
    {
        $this->setMeta('Контакты');
        $meta = $this->meta;
        $this->set(compact('meta'));
    }

    public function contractAction()
    {
        $this->setMeta('Договор и оплата');
        $meta = $this->meta;
        $this->set(compact('meta'));
    }

    public function discountsAction()
    {
        $this->setMeta('Скидки');
        $meta = $this->meta;
        $this->set(compact('meta'));
    }

    public function guaranteeAction()
    {
        $this->setMeta('Гарантия');
        $meta = $this->meta;
        $this->set(compact('meta'));
    }

    public function installationAction()
    {
        $this->setMeta('Установка дверей');
        $meta = $this->meta;
        $this->set(compact('meta'));
    }
}
