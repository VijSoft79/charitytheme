<?php 
// Template Name:Contact
get_header();
?>

<!--Key Benefits Open-->
<div class="container-fluid pt-80 pb-80 keybenifites">
  <div class="container">
    <div class="row d-flex align-items-center">      
       <div class="col-lg-6 mb-3">
          <h2 class="section-title mb-3 mb-lg-5 pb-3"><a href="<?php echo site_url();?>">Home </a> >> <?php the_title();?></h2>
          <?php the_content();?>
      </div>
      <!--/Col--> 
      <div class="contact-info">
        <p><strong>Email:</strong> <a href="mailto:info@yourwebsite.com">info@yourwebsite.com</a></p>
        <p><strong>Phone:</strong> +123 456 7890</p>
        <p><strong>Address:</strong> 123 Charity Street, Lagos, Nigeria</p>
        <p><strong>Working Hours:</strong> Monday - Friday: 9 AM - 6 PM</p>
      </div>
      <div class="map">
        <p>Find us on Google Maps:</p>
        <!-- You can either use an image or an embedded map -->
        <!-- Option 1: Google Map Image -->
        <img src="https://via.placeholder.com/800x400?text=Google+Map+Location" alt="Google Map Location">
        
        <!-- Option 2: Google Map Embed -->
        <!-- Uncomment this if you'd rather use an embedded map -->
        <!--
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.8929379353746!2d144.95373631548824!3d-37.816217979751746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad6433b2d8b7c47%3A0x4a5b5ecf476f84de!2sFederation+Square!5e0!3m2!1sen!2sus!4v1538565321799" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        -->
    </div>
      <!--/Col-->
    </div>
  </div>
</div>
<!--Key Benefits Close--> 

<?php get_footer();?>