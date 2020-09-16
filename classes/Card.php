<?php

namespace Coopernet\memo;
use \DateTime;

class Card {
  // déclaration d'une propriété
  private $question;
  private $answer;
  private $date;

  // propriété statique
  public static $copyright = "© Coopernet";

  function __construct($question, $answer) {
    $this->question = $question;
    $this->answer = $answer;
    $this->date = new DateTime();
  }

  // déclaration des méthodes
  function set_question($question) {
    $this->question = $question;
  }
  function get_question() {
    return $this->question;
  }
  function set_answer($answer) {
    $this->answer = $answer;
  }
  function get_answer() {
    return $this->answer;
  }
  // déclaration d'une méthode statique
  public static function get_copyright() {
    return "© Coopernet";
  }
}
