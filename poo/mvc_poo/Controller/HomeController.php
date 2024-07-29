<?php

namespace Controller;

class HomeController
{
    public static function afficherAccueil()
    {
        require_once VIEWS . '/home.html.php'; // J'appelle la vue home
    }
}
