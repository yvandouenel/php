<?php

$num = (int)readline("Entrez votre choix (1, 2 ou 3) : ");

switch ($num) {
  case 1:
    echo "Vous avez choisi l'option $num \n";
    break;
  case 2:
    echo "Vous avez choisi l'option $num \n";
    break;
  case 3:
    echo "Vous avez choisi l'option $num \n";
    break;
  default:
    echo "Vous n'avez pas entré une valeur comprise entre 1 et 3 \n";
}

for($i = 0; $i < 10; $i++) {
  echo $i;
}
echo "\n ################################# \n";
$notes = [12, 14, 16];
foreach($notes as $note) {
  echo $note . "\n";
}

$personnes = [
  ['nom' => "Dylan"],
  ['nom' => "Marley"]
];

foreach($personnes as $personne) {
  foreach($personne as $key => $value) {
    echo $key . " : " . $value . "\n";
  }
  
}