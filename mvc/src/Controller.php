<?php
namespace Src;
use Src\Model\Card;

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
    if($this->parameters["_route"] == "home_route") {
      echo $twig->render('home.twig', ['title' => 'Accueil MVC','text' => "Bienvenue sur Memo" ]);
      
    } 
    elseif ($this->parameters["_route"] == "cards_route") {
      // On va chercher les données 
      $card = new Card($this->connexion);
      $cards = $card->getCards();
      
      // on affiche les données en utilisant les templates twig
      echo $twig->render('cards.twig', ['title' => 'Toutes les cartes','cards' => $cards ]);
     
    } 
    elseif ($this->parameters["_route"] == "cards_placeholder_route") {
      // On va chercher les données 
      $card = new Card($this->connexion);
      $cards = $card->getCard($this->parameters["id"]);
      
      // on affiche les données en utilisant les templates twig
      echo $twig->render('card.twig', ['title' => $cards[0]["c_question"],'card' => $cards[0] ]);
      
    }
  }
}
