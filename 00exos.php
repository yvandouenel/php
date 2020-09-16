<?php
/* Excercice 1 : Savoir si le mot entré est un palindrome */
/* $text = (string) readline("Entrez un mot, nous vous dirons si c'est un palindrome (stop pour arrêter) : ");

while (true) {
  if($text == "stop") break;
  $text_inversed = strrev($text);
  if ($text_inversed === $text) echo "Oui, c'est un palindrome \n";
  else echo "Non, ce n'est pas un palindrome \n";
  $text = (string) readline("Entrez un mot, nous vous dirons si c'est un palindrome (stop pour arrêter) : ");
} */
/* Fin exercice 1 */

/* Exercice 2 : calculer la moyenne (2 chiffres après la virgule) du tableau notes 
Ici l'exercice consiste surtout à chercher les bonnes fonctions sur la doc ou via google*/
$notes = [10, 12, 14.8];
$moyenne = round(array_sum($notes) / count($notes),2);
echo "Moyenne : $moyenne \n";

/* Fin exercice 2 */