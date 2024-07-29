<?php

namespace Model;

use Config;
use PDO;

class Model
{

    /**
     * Renvoie un objet PDO
     * (effectue la connexion à la BDD)
     */
    protected static function connexion()
    {
        return new PDO(
            'mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME,
            Config::DB_USER,
            Config::DB_PASSWORD
        );
    }

    /**
     * Exécute une requête SQL simple (sans paramètre)
     * 
     * @param string $requete La requête SQL à exécuter
     * @return objet|objet[] Le résultat de la requête
     */
    protected static function envoyerRequeteSimple(string $requete)
    {
        $bdd = static::connexion();

        $resultat = $bdd->query($requete);

        if ($resultat->rowCount() > 1) return $resultat->fetchAll(PDO::FETCH_OBJ);
        else return $resultat->fetch(PDO::FETCH_OBJ);

        // En ternaire ça donne ça :
        // return ($resultat->rowCount() > 1) ?
        //     $resultat->fetchAll(PDO::FETCH_OBJ)
        //     : $resultat->fetch(PDO::FETCH_OBJ);
    }

    /**
     * Exécute une requête SQL avec paramètres
     * 
     * @param string $requete La requête SQL à exécuter
     * @param mixed[] $params Les paramètres de la requête
     * 
     * @return objet|objet[] Le résultat de la requête
     */
    protected static function envoyerRequetePreparee(string $requete, ...$params)
    {
        $bdd = static::connexion();

        $stmt = $bdd->prepare($requete);
        $stmt->execute($params);

        if ($stmt->rowCount() > 1) return $stmt->fetchAll(PDO::FETCH_OBJ);
        else return $stmt->fetch(PDO::FETCH_OBJ);
    }
}
