<?php
/*
Plugin Name: Gueray ist cool!
Plugin URI: https://azure.wp24.net/ > https://wp-wsd-test.azurewebsites.net
Description: A simple plugin that displays the message "Gueray ist cool!".
Version: 1.0
Author: Brainhub24 | Jason Prime
Author URI: https://www.brainhub24.com/
License: GPLv2 or later
*/

function gueray_ist_cool_widget() {
  echo "<p>Gueray ist cool!</p>";
}

function gueray_ist_cool_register_widget() {
  register_widget( 'Gueray_Ist_Cool_Widget' );
}

class Gueray_Ist_Cool_Widget extends WP_Widget {
  function __construct() {
    parent::__construct(
      'gueray_ist_cool_widget',
      __( 'Gueray ist cool!', 'gueray-ist-cool' ),
      array(
        'description' => __( 'A simple widget that displays the message "Gueray ist cool!"', 'gueray-ist-cool' ),
      )
    );
  }

  public function widget( $args, $instance ) {
    echo $args['before_widget'];
    gueray_ist_cool_widget();
    echo $args['after_widget'];
  }
}

add_action( 'widgets_init', 'gueray_ist_cool_register_widget' );
