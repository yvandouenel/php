<?php
namespace Model;
class Card {
  // propriétés
  public $connexion;

  // constructeur
  function __construct($connexion) {
    $this->connexion = $connexion;
    
  }

  // Méthodes
  public function getCards() {
    $sql =  'SELECT c_question, c_answer FROM memo.card';
    
    return $this->connexion->query($sql);
  }

}