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
    //-- Enable Background in the Admin --//
   add_theme_support('custom-background');

   //-- Enable excerpt (short description) inside page section --//
   add_post_type_support('page','excerpt');
   
   function register_news_category_taxonomy() {
    register_taxonomy(
      'news_category',
      'news', // Post type associated with taxonomy
      array(
        'labels' => array(
          'name' => 'News Categories',
          'singular_name' => 'News Category',
        ),
        'public' => true,
        'hierarchical' => true,
        'rewrite' => array(
          'slug' => 'news_category', // Slug for the URL
          'with_front' => false, // To prevent using the blog prefix in the URL if your permalinks use /blog
        ),
      )
    );
  }
  add_action('init', 'register_news_category_taxonomy');
  
  
?>