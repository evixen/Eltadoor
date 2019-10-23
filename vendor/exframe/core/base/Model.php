<?php

namespace exframe\core\base;

use exframe\core\Db;
use Valitron\Validator;

abstract class Model
{
    public $attributes = [];

    /**
     * @var array
     * содержит ошибки валидации
     */
    public $errors = [];

    /**
     * @var array
     * правила валидации
     */
    public $rules = [];

    protected $pdo;
    protected $table;

    /**
     * первичный ключ необходимой записи
     * @var [type]
     */
    protected $pk = 'id';

    public function __construct()
    {
        $this->pdo = Db::instance();
    }

    public function load($data)
    {
        foreach ($this->attributes as $name => $value) {
            if (isset($data[$name])) {
                $this->attributes[$name] = $data[$name];
            }
        }
    }

    public function save($table)
    {
        $tbl = \R::dispense($table);
        foreach ($this->attributes as $name => $value) {
            $tbl->$name = $value;
        }
        return \R::store($tbl);
    }

    public function validate($data)
    {
        Validator::langDir(ROOT . '\public\valitron\lang');
        Validator::lang('ru');
        $v = new Validator($data);
        $v->rules($this->rules);
        if ($v->validate()) {
            return true;
        } else {
            $this->errors = $v->errors();
            return false;
        }
    }

    public function getErrors()
    {
        $errors = '<ul>';
        foreach ($this->errors as $error) {
            foreach ($error as $item) {
                $errors .= "<li>$item</li>";
            }
        }
        $errors .= '</ul>';
        $_SESSION['error'] = $errors;
    }

    // Методы для работы с базой, если не используется ORM
    /*public function query()
    {
        return $this->pdo->execute();
    }

    public function findAll()
    {
        $sql = "SELECT * FROM {$this->table}";
        return $this->pdo->query($sql);
    }

    public function findOne($id, $field = '')
    {
        $field = $field ?: $this->pk;
        $sql = "SELECT * FROM {$this->table} WHERE $field = ? LIMIT 1";
        return $this->pdo->query($sql, [$id]);
    }

    public function findBySql($sql, $params = [])
    {
        return $this->pdo->query($sql, $params);
    }

    public function findLike($str, $field, $table = '')
    {
        $table = $table ?: $this->table;
        $sql = "SELECT * FROM {$table} WHERE {$field} LIKE ?";
        return $this->pdo->query($sql, ['%' . $str . '%']);
    }*/
}
