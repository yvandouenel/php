<?php
include "classes/Card.php";
use Coopernet\memo\Card;
$card = new Card("Nom de l'inventeur du WEB ?", "Tim Berners-Lee");
$card->set_answer("TIM!!!");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Affichage d'une instance de classe</title>
</head>
<body>
  <?php
  echo "Copyright : " . Card::get_copyright() . "<br>";
  echo "Copyright : " . Card::$copyright;
  echo <<<EOT
  <dl>
    <dt>Question</dt>
    <dd>{$card->get_question()} </dd>
    <dt>Réponse</dt>
    <dd>{$card->get_answer()} </dd>
</dl>
EOT;
?>
  
</body>
</html>