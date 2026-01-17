<?php
// Theme setup and feature support functions

function vaibhav_theme_setup() {
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'vaibhav_theme_setup');

