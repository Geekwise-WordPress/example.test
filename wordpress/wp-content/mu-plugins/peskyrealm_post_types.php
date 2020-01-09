<?php 

// to customize register_post_types, just google and use codex

function peskyrealm_post_types() {
  register_post_type('event', array(
    'labels' => array(
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
}

add_action('init', 'peskyrealm_post_types');