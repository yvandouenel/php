<?php
  require_once './endpoints.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test voicecup</title>
    <script src="./voicecup.js"></script>
  </head>
  <body>
    <form action="." id="form">
      <label for="word">Mot à prononcer</label>
      <input type="text" id="word" />
      <input type="submit" value="Chercher" />
    </form>
  </body>
</html>
