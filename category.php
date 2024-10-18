<?php get_header(); ?>
<div class="container-fluid pt-80 pb-80 keybenifites">
  <div class="container">
    <div class="row d-flex align-items-center">      
       <div class="col-lg-6 mb-3">
          <h2 class="section-title mb-3 mb-lg-5 pb-3"><a href="<?php echo site_url();?>">Home </a> >> 
          <?php
          if (get_query_var('pagename') == 'blog')  { // Check if the current page is "Blog"
            echo "Blog";
          }else{
            if (is_category()) {
              $category = get_queried_object(); // Get the current category object
              echo esc_html($category->name); // Display the category name
            }
          }
          ?>
          </h2>
      </div>
      </div>
      </div>
      </div>
<?php
  //get_header('inner') // for Multiple header and for example name of the header file name: "header-inner.php"
  if (have_posts()) 
  {
    while (have_posts()) 
    {
        the_post(); // Set up post data
        $post_id = get_the_ID();  // get the ID
        ?>
          <div class="row d-flex align-items-center justify-content-center mt-5">
          <!--/Col-->  
          <div class="col-lg-6 mb-3 text-center ">
            <picture>
              <source media="(min-width:991px)" srcset="<?php echo get_the_post_thumbnail_url($post_id, 'medium'); ?>">
              <img src="<?php echo wp_get_attachment_image_src($post_id,'medium'); ?>" class="img-fluid" title="Mission Statement" >
            </picture>
          </div>
        <div class="col-lg-6 mb-3 item-self-strech">
          <div class="ps-0 ps-lg-5">
            <h4 class="fw-semibold text-uppercase"><?php the_title();?></h4>
            <p>Short Description: <?php the_excerpt();?></p>
            <p>Description: <?php the_content();?></p>
            <p><?php echo get_the_date('F j, Y H:i:s');?></p>
            <p><a href="<?php the_permalink();?>">Read More</a></p>
          </div>
        </div>
      </div>
      <?php 
    }

    wp_pagenavi();
   
} else {
    echo "No posts found!";
}

?>

  
 <?php 
 get_footer(); 
 // get_footer('inner');  // for Multiple footer and for example name of the footer file name: "footer-inner.php or footer-2.php etc"
 ?>


