<?php

namespace app\models;

use exframe\core\base\Model;

class Catalog extends Model
{
    public $table = 'medvedev';
    public $pk = 'name';

    public function findByParam($table, $sql, $param=[])
    {
        return \R::find($table, $sql, $param);
    }

    public function allDoors($table)
    {
        return \R::findAll($table);
    }

    public function oneDoorByParam($table, $sql, $param=[])
    {
        return \R::findOne($table, $sql, $param);
    }
}
