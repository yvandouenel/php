<?php
$notes = [10,20]; // nouvelle syntaxe
$notes = array(10,20); // ancienne syntaxe

$eleve = [
  'nom' => 'Doe', 
  'Prenom' => 'Marc',
  'notes' => [10, 20, 15]
];

// équivalent du push
$eleve['notes'][] = 17.5;
$eleve['classe'] = "Première 2";
$eleve['classe'] = "Terminale 2";

var_dump($eleve);