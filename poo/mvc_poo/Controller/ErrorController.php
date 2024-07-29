<?php

namespace Controller;

class ErrorController
{
    public static function error404()
    {
        require_once view('errors/404');
    }

    public static function error500()
    {
        require_once view('errors/500');
    }
}
