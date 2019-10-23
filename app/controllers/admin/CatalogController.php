<?php

namespace app\controllers\admin;


class CatalogController extends AppController
{
    public function indexAction()
    {
        $name = ['name' => 'Herman'];
        $this->set(compact('name'));
    }
}