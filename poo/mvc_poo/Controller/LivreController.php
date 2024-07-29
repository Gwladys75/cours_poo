<?php

namespace Controller;

use Model\LivreModel;

class LivreController
{
    public static function afficherTousLesLivres()
    {

        // 1. Aller chercher les infos
            // Appeler un modèle
            $livres = LivreModel::allerChercherTousLesLivres();

        // 2. Afficher les infos
            // Appeler une vue
            require_once view('books');
    }
}
