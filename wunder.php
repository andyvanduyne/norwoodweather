<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/013aca142bc83b9a/forecast/q/NY/Norwood.json");
  echo $json_string;
  $parsed_json = json_decode($json_string);
  $fcttext = $parsed_json->{"forecast"}->{"fcttext"};
  echo "Norwood Forecast: {$parsed_json->{"forecast"}->{"fcttext"}} \n";
?>