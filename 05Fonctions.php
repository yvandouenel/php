<?php
//declare(strict_types=1);
/* Exercice : calculer la moyenne (2 chiffres après la virgule) du tableau notes 
Ici l'exercice consiste surtout à chercher les bonnes fonctions 
sur la doc (https://www.php.net/manual/fr/funcref.php) ou via google*/
/* 
$notes = [10, 12, 14.8];
$moyenne = round(array_sum($notes) / count($notes),2);
echo "Moyenne : $moyenne \n"; */

/* Fin exercice */

/* Création de la fonction addidtion */
function addition(int $a, int $b): int { // attention, convertit en int sans lancer d'exception
  return $a + $b;
}
$result = addition(2, 5.8);
var_dump($result);
//echo "\n" . addition(2,5) ." \n";

/* Fin exercice */