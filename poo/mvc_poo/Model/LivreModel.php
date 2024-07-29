<?php

namespace Model;

class LivreModel extends Model
{
    public static function allerChercherTousLesLivres()
    {
        return static::envoyerRequeteSimple('SELECT * FROM livre');
    }

    public static function allerChercherUnLivre($id)
    {
        $requete = 'SELECT * FROM livre WHERE id_livre = ?';

        return static::envoyerRequetePreparee($requete, $id);
    }
}

?>