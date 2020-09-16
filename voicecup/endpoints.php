<?php
require_once __DIR__ . '/vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->get('/api/', function () {
  $data = array("test" => "Hello");
  return json_encode($data);
});

$app->run();
