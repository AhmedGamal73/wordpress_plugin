<?php

/*
 * Plugin Name: Add Custom Meta
 * Description: Adding custom meta tag content to the index.html head tag
 * Author: Ampliz
 */


add_action('wp_head', 'custom_meta');

function custom_meta () {
  $custom_meta = 'custom content';
  echo "<meta name='Description' content='{$custom_meta}'";
};
