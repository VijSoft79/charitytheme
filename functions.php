<?php
 //-- Display Menu in the admin section --//
  register_nav_menus(array('primary-menu' => 'Top Menu'));

  //-- Allow Feature Image In Admin --//
  add_theme_support('post-thumbnails');

   //-- Display website logo from admin --//
   add_theme_support(feature: 'custom-header');

  //-- enqueue your JavaScript file and localize the script to pass the theme path --//
  function my_theme_scripts() {
    // Enqueue your JavaScript file
    wp_enqueue_script('my-custom-script', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, false);

    // Localize the script to pass the theme path
    wp_localize_script('my-custom-script', 'myTheme', array(
        'themeUrl' => get_template_directory_uri()
    ));
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');

function my_theme_enqueue_scripts() {
  // Enqueue the custom JavaScript file
  wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

?>