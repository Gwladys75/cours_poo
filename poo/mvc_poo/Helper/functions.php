<?php

/**
 * Génère une URL pour notre site
 * 
 * @param string $route La route visée par l'URL
 * @return string L'URL demandée
 */
function url(string $route): string {
    // Le "?route=" c'est pour qu'on récupère un paramètre d'URL
    return 'index.php?route=' . $route;
}
// $route='modifier-abonne-handler';

/**
 * Génère le chemin entier vers une vue
 * 
 * @param string $file Le nom de la vue
 * @return string Le chemin vers la vue demandée
 */
function view(string $file): string {
    return VIEWS . '/' . $file . '.html.php';
}

/**
 * Dump & die
 */
function dd($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die;
}

/**
 * Redirige vers une route
 * 
 * @param string $route La route visée par la redirection
 */
function redirect(string $route) {
    header('location: ' . url($route));
    die;
}

