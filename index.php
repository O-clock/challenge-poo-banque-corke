<?php

require('Client.php');
require('Compte.php');

// Rédigez ici le programme de test de vos classes

// 1. créez des clients, initialisez les, affichez les
$client1 = new Client("1", "Bara", "roland");
$client2 = new Client("2", "jar", "julien");
echo "<h1>INFO CLIENT : </h1>";
echo $client1->infoClient();
echo $client2->infoClient();

// 2. créez des comptes, manipulez les à l'aide des gonctions créées (en utilisant éventuellement les clients créés plus haut)
echo "<h1>INFO COMPTE : </h1>";
$compte1 = new Compte("1500", "1234", $client1);
echo $compte1->infoCompte();

$compte2 = new Compte("10000", "1535", $client2);
echo $compte2->infoCompte();


echo "<h2>Ajout de crédit : </h2>";
$compte1->crediter(1000);
echo $compte1->infoCompte();
echo "<h2>Debit de crédit : </h2>";
$compte1->debiter(1500);
echo $compte1->infoCompte();

echo "<h2>Transaction entre 2 compte  : </h2>";
echo "<h3>Créditer depuis un compte distant  : </h3>";

$compte1->crediterDepuisCompteDistant(10, $compte2);

echo "Compte 1 : " . $compte1->getSolde() ."<br/>";

echo "Compte 2 : " . $compte2->getSolde();

echo "<h3>Débiter vers un compte distant  : </h3>";

$compte1->debiterVersCompteDistant(5, $compte2);

echo "Compte 1 : " . $compte1->getSolde() ."<br/>";

echo "Compte 2 : " . $compte2->getSolde();

