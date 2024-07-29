<?php

namespace Model;

class AbonneModel extends Model
{
    public static function allerChercherTousLesAbonnes()
    {
        return static::envoyerRequeteSimple('SELECT * FROM abonne');
    }

    public static function allerChercherunAbonne($id)
    {
        return static::envoyerRequetePreparee('SELECT * FROM abonne WHERE id_abonne = ?', $id);
    }

    public static function modifierUnAbonne($id, $prenom)
    {
        return static::envoyerRequetePreparee(
            'UPDATE abonne SET prenom = ? WHERE id_abonne = ?', 
            $prenom, $id
        );
    }
}


?>