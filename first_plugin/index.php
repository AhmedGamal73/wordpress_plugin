<?php
/*
 * Plugin Name: First Plugin
 * Author: Mo Gamal
 *
 * */

add_action('wp_head', 'add_custom_style');


function add_custom_style() {
  $css_url = plugins_url('css/style.css', __file__);
  echo "<link rel='stylesheet' href='{$css_url}'>";
};

