<?php

/**
 * Je suis dans le routeur
 * 
 * TOUTES les pages passent par ici
 * 
 * Donc j'en profite pour faire 
 * TOUTES les configurations nécessaires
 */

session_start();

function chercherFQCN(string $fqcn)
{
    require_once __DIR__ . '/' . $fqcn . '.php';
}

spl_autoload_register('chercherFQCN');

/*
FQCN en PHP signifie "Fully Qualified Class Name" (nom de classe entièrement qualifié en français). Il s'agit d'un nom de classe complet qui inclut le namespace (espace de noms) et le nom de la classe.

Par exemple, si le namespace est "App\Models" et le nom de la classe est "User", alors le FQCN sera "App\Models\User".

Les FQCN sont utilisés pour référencer de manière précise une classe dans le code, notamment lors de l'instanciation d'objets ou lors de l'appel à des méthodes ou propriétés statiques. Les FQCN permettent d'éviter les conflits de noms entre différentes classes et de faciliter l'organisation du code dans des namespaces.



*/

use Controller\AbonneController;
use Controller\AboutController;
use Controller\ErrorController;
use Controller\HomeController;
use Controller\LivreController;
use Helper\Exception\NotFoundException;

require_once __DIR__ . '/Helper/functions.php';

const VIEWS = __DIR__ . '/View';




try {
    if (!empty($_GET['route'])) {
        // Si on a une route


        switch ($_GET['route']) { // On regarde la valeur de la route
            case 'home':
                HomeController::afficherAccueil();
                break;

            case 'about':
                AboutController::afficherAbout();
                break;

            case 'afficher-livres':
                LivreController::afficherTousLesLivres();
                break;

            case 'afficher-abonnes':
                AbonneController::afficherTousLesAbonnes();
                break;

            case 'modifier-abonne':
                AbonneController::modifierUnAbonne();
                break;

            case 'modifier-abonne-handler':
                AbonneController::modifierUnAbonneHandler();
                break;

            default:
                throw new NotFoundException;
        }
    } else {
        // On n'a pas de route
        HomeController::afficherAccueil();
    }
} catch (NotFoundException $e) {
    // Dans le cas où on attrape une NotFoundException
    ErrorController::error404();
} catch (Exception $e) {
    // Dans le cas de n'importe quelle autre erreur
    ErrorController::error500();
}
