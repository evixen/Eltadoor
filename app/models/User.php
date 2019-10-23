<?php /** @noinspection ALL */

namespace app\models;

use exframe\core\base\Model;

class User extends Model
{
    public $attributes = [
        'login' => '',
        'password' => '',
        'name' => '',
        'email' => '',
    ];

    public $rules = [
        'required' => [
            ['login'],
            ['password'],
            ['password2'],
            ['email'],
            ['name'],
        ],
        'email' => [
            ['email'],
        ],
        'lengthMin' => [
            ['password', 8],
        ],
        'slug' => [
            ['login'],
        ],
        'equals' => [
            ['password', 'password2'],
        ],

    ];

    /**
     * Проверяем логин и емэйл нового пользователя
     * на уникальность
     * @return bool
     */
    public function checkUnique()
    {
        $user = \R::findOne('user', 'login = ? OR email = ? LIMIT 1',
            [$this->attributes['login'], $this->attributes['email']]);
        if ($user) {
            if (strtolower($user->login) == strtolower($this->attributes['login'])) {
                $this->errors['unique'][] = 'Этот логин уже занят.';
            }
            if (strtolower($user->email) == strtolower($this->attributes['email'])) {
                $this->errors['unique'][] = 'Этот email уже занят.';
            }
            return false;
        }
        return true;
    }

    public function login()
    {
        $login = !empty(trim($_POST['login'])) ? trim($_POST['login']) : null;
        $password = !empty(trim($_POST['password'])) ? trim($_POST['password']) : null;
        if ($login && $password) {
            $user = \R::findOne('user', 'login = ? LIMIT 1', [$login]);
            if ($user) {
                if (password_verify($password, $user->password)) {
                    foreach ($user as $k => $v) {
                        if ($k != 'password') $_SESSION['user'][$k] = $v;
                    }
                    return true;
                }
            }
        }
        return false;
    }
}