<?php
  get_header();
  the_post();
  $post_id = get_the_ID();
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
            <p>Author: <?php echo ucfirst(get_the_author());?></p>
            <p><?php echo get_the_date('F j, Y H:i:s');?></p>
            <p><?php comments_template();?></p>
          </div>

        </div>
      </div>

<?php
  get_footer();
?>