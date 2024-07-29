<?php

class Compte // la class est le moule, le plan
{
    // -----------propriétés 
    /**
     * titulaire du compte 
     *
     * @var string
     */
    
    //  public $titulaire; // visibilité de la propriété = public // en dehors de la class
     private $titulaire; // visibilité de la propriété = privé // pour acceder à ses propriétés il faut créer des accesseurs = setters et getters // 
     /**
      * solde du compte 
      * 
      * @var float 
      */
    private $solde;



    //-----Constantes--------
    const TAUX_INTERETS = 5;

    //--------Méthodes------------
    // Constructeur du compte bancaire 
    /**
     *
     * @param string $nom Nom du titulaire 
     * @param float $montant Montant du solde à l'ouverture 
     */

      // __construct : 
     // quand il y a le mot new, donc à chaque instanciation d'objet 
 public function __construct(string $nom, float $montant = 100 )
 {
  // on attribu le nom à la propriété titulaire de l'instance crée
  $this->titulaire = $nom;

  // on attribue le montant à la propriété solde
  $this->solde = $montant + ($montant * self )

 }

//Accesseurs

/**
 * Getter de titulaire - Retourne la valeur du
 * titulaire du compte 
 * @return string
 */
public function getTitulaire(): string {

  return $this->titulaire;
}

/**
 * Modifie le nom du titulaire et retourne l'objet
 *
 * @param string $nom Nom du titulaire
 * @return Compte (le $this) = le compte bancaire 
 */
public function setTitulaire(string $nom): self // self = qui fait référnce à la classe 
{
  if ($nom != "") {
     $this->titulaire = $nom; // this = pour l'objet instancier de la classe  
  }
  
  return $this;
}



/**
 * Déposer de l'argent sur le compte 
 *
 * @param float $montant 
 * @return void
 */
 public function deposer(float $montant)
 {
 // on vérifie si le montant est positif 
 if ( $montant > 0) {
  $this->solde += $montant;
 }

  }

 /**
  * Undocumented function
  *
  * @return string
  */
  public function voirSolde()

  {
    return "Le solde du compte est de $this->solde euros";
  }


  public function retirer(float $montant)
  
  {
    //On vérifie le montant et le solde 

    if ( $montant > 0 && $this->solde >= $montant){

      $this->solde -= $montant;

    }else{
      echo ' montant invalide ou insuffisant';
    }

    //echo $this->decouvert();

  }





  private function decouvert() {
    if ($this->solde <0 ) {
      return "vous êtes à découvert";
    }else{
      return "vous n'êtes pas à couvert";
    }
  }



?>              