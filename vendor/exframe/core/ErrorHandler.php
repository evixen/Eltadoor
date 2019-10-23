<?php

namespace exframe\core;

class ErrorHandler
{
    public function __construct()
    {
        if (DEBUG) {
            error_reporting(-1);
        } else {
            error_reporting(0);
        }
        set_error_handler([$this, 'errorHandler']);
        set_exception_handler([$this, 'exceptionHandler']);
        ob_start();
        register_shutdown_function([$this, 'fatalErrorHandler']); //for PHP<7.0
    }

    public function errorHandler($errno, $errstr, $errfile, $errline)
    {
        $this->logErrors($errstr, $errfile, $errline);
        $this->displayError($errno, $errstr, $errfile, $errline);
        return true;
    }

    public function fatalErrorHandler()
    {
        $error = error_get_last();
        if (!empty($error) AND $error['type'] & (E_ERROR | E_PARSE | E_COMPILE_ERROR | E_CORE_ERROR)) {
            $this->logErrors($error['message'], $error['file'], $error['line']);
            ob_end_clean();
            $this->displayError($error['type'], $error['message'], $error['file'], $error['line']);
        } else {
            ob_end_flush();
        }
    }

    public function exceptionHandler($ex)
    {
        $this->logErrors($ex->getMessage(), $ex->getFile(), $ex->getLine());
        $this->displayError($ex->getCode(), $ex->getMessage(), $ex->getFile(), $ex->getLine(), $ex->getCode());
    }

    protected function displayError($errno, $errstr, $errfile, $errline, $response = 500)
    {
        http_response_code($response);
        if ($response == 404 && !DEBUG) {
            require_once APP . '/views/errors/404.php';
            die();
        }
        if (DEBUG) {
            require_once APP . '/views/errors/dev.php';
        }
    }

    protected function logErrors($message = '', $file = '', $line = '')
    {
        error_log("[" . date('Y-m-d H:i:s') . "]\n Текст ошибки: {$message} | 
Файл: {$file} | Строка {$line}\n=========================\n",
            3, ROOT . '/tmp/errors.log');
    }
}
