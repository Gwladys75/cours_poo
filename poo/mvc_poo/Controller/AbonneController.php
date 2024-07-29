<?php

namespace Controller;

use Helper\Exception\NotFoundException;
use Model\AbonneModel;

class AbonneController
{
    public static function afficherTousLesAbonnes()
    {
        // 1. Aller chercher les données
        $abonnes = AbonneModel::allerChercherTousLesAbonnes();

        // 2. Afficher la page
        require_once view('users');
    }

    public static function modifierUnAbonne()
    {
        if (!empty($_GET['id'])) {
            // J'ai un ID, tout va bien

            $abonne = AbonneModel::allerChercherUnAbonne($_GET['id']);

            if (!$abonne) // Si j'ai pas trouvé l'abonné
                throw new NotFoundException;

            require_once view('modif-user');
        } else {
            // J'ai pas d'ID, erreur
            throw new NotFoundException;
        }
    }

    public static function modifierUnAbonneHandler()
    {
        if (!empty($_GET['id'])) {
            // J'ai un ID, tout va bien

            $abonne = AbonneModel::allerChercherUnAbonne($_GET['id']);

            if (!$abonne) // Si j'ai pas trouvé l'abonné
                throw new NotFoundException;

            if (
                !empty($_POST['prenom'])
                

                )
             {
                AbonneModel::modifierUnAbonne($_GET['id'], $_POST['prenom']);

                redirect('afficher-abonnes');
            } else {
                redirect('modifier-abonne&id=' . $_GET['id']);
            }
        } else {
            // J'ai pas d'ID, erreur
            throw new NotFoundException;
        }
    }
}
