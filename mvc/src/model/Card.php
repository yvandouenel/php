<?php

namespace Src\Model;

class Card {
  // propriétés
  public $connexion;

  // constructeur
  function __construct($connexion) {
    $this->connexion = $connexion;
  }

  // Méthodes
  public function getCards() {
    $sql =  'SELECT * FROM memo.card';
    return $this->connexion->query($sql);
  }
  public function getCard(int $c_id) {
    /* Execute a prepared statement by passing an array of values */
    $sql = 'SELECT * FROM memo.card WHERE c_id = :c_id';
    $sth = $this->connexion->prepare($sql);
    $sth->execute(array(':c_id' => $c_id));
    return $sth->fetchAll();
  }
}
