<?php


/*
 * Plugin Name: Custom Meta
 * Description: Adding custom meta tag
 * Author: Ahmed Gamal
 */


add_action('wp_head', 'custom_meta');

function custom_meta () {
  $meta_content = 'conten of the meta tag';
  echo " <meta name='Description' content='{$meta_content}'";
};
