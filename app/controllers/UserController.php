<?php

namespace app\controllers;

use app\models\User;
use exframe\core\base\Controller;

class UserController extends Controller
{
    public function signupAction()
    {
        if (!empty($_POST)) {
            $data = $_POST;
            $user = new User();
            $user->load($data);
            if (!$user->validate($data) || !$user->checkUnique()) {
                $user->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }
            $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
            if ($user->save('user')) {
                $_SESSION['success'] = 'Вы успешно зарегистрированы!';
            } else {
                $_SESSION['error'] = 'Произошла ошибка.';
            }
            redirect();
        }
    }

    public function loginAction()
    {
        if (!empty($_POST)) {
            $user = new User();
            if ($user->login()) {
                $_SESSION['success'] = 'Вы успешно авторизованы.';
            } else {
                $_SESSION['error'] = 'Логин или пароль введены неверно.';
            }
            redirect('/');
        }
    }

    public function logoutAction()
    {
        if (isset($_SESSION['user'])) unset($_SESSION['user']);
        redirect('/user/login');
    }
}
