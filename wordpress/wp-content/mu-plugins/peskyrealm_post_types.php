<?php 

function peskyrealm_post_types() {
  //Event Post Type
  register_post_type('event', array(
    'labels' => array(
      'supports' => array(
        'title', 
        'editor',
        'excerpt',
      ),
      'rewrite' => array(
        'slug' => 'events'
      ),
      'has_archive' => true,
      'public' => true,
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar-alt'
  ));

  //Program Post Type

  register_post_type('program', array(
    'labels' => array(
      'supports' => array(
        'title', 
        'editor',
      ),
      'rewrite' => array(
        'slug' => 'programs'
      ),
      'has_archive' => true,
      'public' => true,
      'name' => 'Programs',
      'add_new_item' => 'Add New Program',
      'edit_item' => 'Edit Program',
      'all_items' => 'All Programs',
      'singular_name' => 'Program'
    ),
    'menu_icon' => 'dashicons-awards'
  ));
}

add_action('init', 'peskyrealm_post_types');

?>