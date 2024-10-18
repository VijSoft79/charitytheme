<?php get_header(); ?>
<?php $catData = get_queried_object();?>
<div class="container-fluid pt-80 pb-80 keybenifites">
  <div class="container">
    <div class="row d-flex align-items-center">      
       <div class="col-lg-6 mb-3">
          <h2 class="section-title mb-3 mb-lg-5 pb-3"><a href="<?php echo site_url();?>">Home </a> >> 
          <?php echo $catData->name;?>
          </h2>
      </div>
      </div>
      </div>
      </div>
      <div>
      <?php
  // Pagination setup
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Default to page 1 if not available
  
  // Initialize search data
  $searchData = '';
  
  // Check if the 'title' key exists in $_GET to prevent undefined array key error
  if (isset($_GET['title'])) {
    $searchData = sanitize_text_field($_GET['title']); // sanitize the user input
  }
?>

<form method="get">
  <input type="text" name="title" placeholder="search by name" value="<?php echo esc_attr($searchData); ?>">
  <input type="submit" value="Search">
</form>

<?php
  // Define the query args
  $newsArr = array(
    'post_type'      => 'news',
    'post_status'    => 'publish',
    'posts_per_page' => 1,
    's'              => $searchData,
    'paged'          => $paged,
    'tax_query'      => array(
      array(
        'taxonomy' => 'news_category',
        'field'    => 'term_id',
        'terms'    => $catData->term_id
      )
    )
  );

  // Create a new WP_Query
  $newsQue = new WP_Query($newsArr);

  // Check if the query returned any posts
  if ($newsQue->have_posts()) {
    while ($newsQue->have_posts()) {
      $newsQue->the_post();
      $post_id = get_the_ID();
?>
    <div class="row d-flex align-items-center justify-content-center mt-5">
      <!--/Col-->
      <div class="col-lg-6 mb-3 text-center">
        <picture>
          <source media="(min-width:991px)" srcset="<?php echo esc_url(get_the_post_thumbnail_url($post_id, 'medium')); ?>">
          <img src="<?php echo esc_url(wp_get_attachment_image_src($post_id, 'medium')); ?>" class="img-fluid" title="Mission Statement">
        </picture>
      </div>
      <div class="col-lg-6 mb-3 item-self-strech">
        <div class="ps-0 ps-lg-5">
          <h4 class="fw-semibold text-uppercase"><?php the_title(); ?></h4>
          <p>Short Description: <?php the_excerpt(); ?></p>
          <p>Description: <?php the_content(); ?></p>
          <p><?php echo get_the_date('F j, Y H:i:s'); ?></p>
          <p><a href="<?php the_permalink(); ?>">Read More</a></p>
        </div>
      </div>
    </div>
<?php 
    } 
    // Pagination (using wp_pagenavi if available, else default)
    if (function_exists('wp_pagenavi')) {
      wp_pagenavi(array('query' => $newsQue));
    } else {
      // Fallback pagination
      next_posts_link('Older Posts', $newsQue->max_num_pages);
      previous_posts_link('Newer Posts');
    }
  } else {
    echo "No posts found!";
  }

  // Reset the post data to avoid conflicts
  wp_reset_postdata();
?>


  
 <?php 
 get_footer(); 
 // get_footer('inner');  // for Multiple footer and for example name of the footer file name: "footer-inner.php or footer-2.php etc"
 ?>


