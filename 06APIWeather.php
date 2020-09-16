<?php
$access_key = '615d42bdf9af02d6faa3e329c97c288b';
$url = 'http://api.weatherstack.com/current';
/* ? access_key = YOUR_ACCESS_KEY
& query = New York' */
$town = readline("Entrez le nom d'une ville pour connaître sa météo (fin pour arrêter) : ");
while (true) {
  if($town === "fin") die("Script terminé \n");
  else {
    $town = urlencode($town);
    $request = $url . "?access_key=$access_key&query=$town";
    //var_dump($request);
    $response = json_decode(file_get_contents($request));
    //var_dump($response->current);
    echo 'Description : ' . $response->current->weather_descriptions[0] . " \n";
    echo 'Température : ' . $response->current->temperature . "°C \n";
    echo 'Vent : ' . $response->current->wind_speed . ' noeuds - Direction : ' . $response->current->wind_dir ." \n";
    $town = readline("Entrez le nom d'une ville pour connaître sa météo (fin pour arrêter) : ");
  }
}