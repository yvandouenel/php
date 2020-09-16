<?php
$key = "k5HRNv5msL";
$word = "promise";
$url = "http://voicecup.com/api?" .
  "q=" . $word . "&" .
  "key=" . $key .
  "&l=en&from=10&size=15&length_min=15&length_max=50&duration_min=5&duration_max=25&format=jsonp";
$data = file_get_contents($url);
echo $data;

preg_match('/"hits":(.*)deliver/', $data, $matches, PREG_OFFSET_CAPTURE);
print_r($matches);