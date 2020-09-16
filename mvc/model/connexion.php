<?php
require_once('settings.php');

$dsn = 'pgsql:host=' . HOST . ';port=5432;dbname=' . DBNAME .
   ';user=' . USERNAME . ';password=' . PASSWORD;
//var_dump($dsn);
try {
   $connexion = new PDO($dsn);
   if ($connexion) {
     /*  $sql =  'SELECT c_question, c_answer FROM memo.card';
      foreach ($connexion->query($sql) as $row) {
   
         print $row['c_question'] . "\t";
         print  $row['c_answer'] . "\t";
      } */
   }
} catch (PDOException $e) {
   echo "y a un pb vieux : ";
   echo $e->getMessage();
   // cf https://stackoverflow.com/questions/56399295/how-to-enable-php-pdo-driver-for-postgres-on-ubuntu-18-04
}
