<?php
require_once "classes/Compte.php";
require_once "classes/compteCourant.php";
require_once "classes/compteEpargne.php";

function debug($var)
{

    echo '<pre>';

    var_dump($var);

    echo '</pre>';
}





// on intancie le  compte
$compte1 = new Compte('Issa', 500);
// on ecrit dans la propriété titulaire 
// $compte1->titulaire = 'Issa';
// on ecrit dans la propriété titulaire 
// $compte1->solde = 500;

// on dépose 100 euros 
$compte1->deposer(100);

echo $compte1->getTitulaire('Gemeda');

$compte1->setTitulaire('')


// $compte2 = new Compte('Roberto');
// //ont écrit dans la propriété titulaire 
// $compte2->titulaire = 'Roberto';
// $compte2->solde = 389.24;
// debug($compte2)

?>

<p><?= $compte1->voirSolde() ?></p>

<?php
$compte1->retirer(50);
?>

<p><?= $compte1->voirSolde() ?></p>

<?php
debug($compte1);
// echo : "Le taux d'intérêt du compte est de :" . Compte::TAUX_INTERETS ."%";

?>