<?php
 //-- Display Menu in the admin section --//
  register_nav_menus(array('primary-menu' => 'Top Menu'));

  //-- Allow Feature Image In Admin --//
  add_theme_support('post-thumbnails');

   //-- Display website logo from admin --//
   add_theme_support(feature: 'custom-header');

   //-- Enable Widget in the admin using below function --//
   register_sidebar(
     array(
          'name' => 'Sidebar Location',
          'id' => 'sidebar'
     )
   );
?>