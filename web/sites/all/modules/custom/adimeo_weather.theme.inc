<?php

/**
 * @param $variables
 */
function adimeo_weather_preprocess(&$variables) {
  $location = "Paris";
  $lang = "fr";
  $apiKey = "98cc78a4f69293ab05786dabf8e80d01";
  $variables = array($location, $lang, $apiKey);
}
