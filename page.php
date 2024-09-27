<?php get_header();?>

<!--Key Benefits Open-->
<div class="container-fluid pt-80 pb-80 keybenifites">
  <div class="container">
    <div class="row d-flex align-items-center">      
       <div class="col-lg-6 mb-3">
          <h2 class="section-title mb-3 mb-lg-5 pb-3"><a href="<?php echo site_url();?>">Home </a> >> <?php the_title();?></h2>
          <?php the_content();?>
      </div>
      <!--/Col--> 
      <div class="col-lg-6 mb-3 text-center">
        <div class="px-5">
          <picture>
            <source media="(min-width:991px)" srcset="<?php bloginfo('template_directory');?>/images/key.png">
            <img src="<?php bloginfo('template_directory');?>/images/key.png"  class="img-fluid" title="Key Benefits">
          </picture>
        </div>
      </div>
      <!--/Col-->
    </div>
  </div>
</div>
<!--Key Benefits Close--> 

<?php get_footer();?>