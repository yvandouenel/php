<?php

// les types *****************************************************
$num = (float) 10;

echo gettype($num);
echo $num;
$num = (string) ($num +1);
echo "\n";
var_dump($num);

// Passage par valeur ou référence *******************************
$jean = "Jean";
$bob = $jean . "not"; // passage par valeur et non par référence, $jean n'est donc pas modifiée
var_dump($jean, $bob);

$jose = &$jean; // passage par référence
$jose = $jose . "not"; // la variable $jean est ici modifiée

var_dump($jean, $jose);

// Scope ********************************************************
$a = 12; // portée globale

function test() {
  echo "a : " . $a;
  /* global $a;
  echo "a : " . $a . "\n"; */
  /* echo "a : " . $GLOBALS['a']; */
}
test();