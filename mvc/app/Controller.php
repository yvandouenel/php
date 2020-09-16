<?php

namespace App;

require_once('../model/Card.php');

use Model\Card;

class Controller {
  // propriétés
  public $parameters;
  public $connexion;

  function __construct($parameters, $connexion) {
    $this->parameters = $parameters;
    $this->connexion = $connexion;
    $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../templates/');
    $twig = new \Twig\Environment($loader, [
      //'cache' => __DIR__ . '/../tmp',
    ]);

    if ($this->parameters["_route"] == "cards_route") {
      // On va chercher les données 
      $card = new Card($this->connexion);
      $cards = $card->getCards();
      
      // on affiche les données en utilisant les templates twig
      echo $twig->render('header.twig', ['name' => 'a']);
      echo $twig->render('main.twig', ['items' => $cards]);
      echo $twig->render('footer.twig', ['name' => 'c']);
    }
  }
}
