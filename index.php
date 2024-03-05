<?php

require_once 'Visibilite/Classes/Compte.php';

//nous allons instancier notre objet à 2 reprises.

//Premiere instance de la classe Compte
$compte1 = new Compte('Rodrigue', 500);

$compte1->setSolde(200);
$compte1->deposer(1000);

echo $compte1->getTitulaire();

$compte1->setTitulaire("");
$compte1->voirSolde();

$compte1->retirer(500);

var_dump($compte1);

// Operateur de résolution de portée (::)
echo "le taux d'interet du compte est : ". Compte::TAUX_INTERETS."%";



// Deuxieme instance de la classe Compte
$compte2 = new Compte('Stephanie');







