<?php

$num = readline("Entrez votre âge : ");
echo "Texte entré : " . $num . "\n";
if($num > 18) echo "vous êtes majeur \n";
else echo "Vous êtes mineur \n";

/* 
  Demander à l'utilisateur de rentrer une note ou de taper "Fin"
  Chaque note est sauvegardée dans un tableau $notes
  A la fin, on affiche le tableau de note sous forme de liste 
*/
/* $notes = [];
$entree = readline("Entrez une note ou tapez \"Fin\" : ");
while ($entree != "Fin") {
  $notes[] = (int) $entree;
  $entree = readline("Entrez une note ou tapez \"Fin\" : ");
}
foreach($notes as $note) {
  echo " - $note \n";
} */
//
//var_dump($notes);