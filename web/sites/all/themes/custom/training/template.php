<?php

function training_preprocess_html(&$variables) {
  drupal_add_css("https://use.fontawesome.com/releases/v5.8.1/css/all.css", array('type' => 'external'));
  drupal_add_js('https://kit.fontawesome.com/50541ab5ec.js', array('type' => 'external'));
}
