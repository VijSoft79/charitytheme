<!-- Footer Open -->
<footer class="py-5" id="contactus">
  <div class="container pt-4">
    <div class="row">
      <div class="col-lg-3 col-sm-6 mb-4">
        <h4 class="mb-3 mb-md-5">Quick Links</h4>
        <ul>
          <li><a href="#!">About Us</a></li>
          <li><a href="#!">How It Works</a></li>
          <li><a href="#!">Contact</a></li>
          <li><a href="#!">Privacy Policy</a></li>
          <li><a href="#!">Terms of Service</a></li>
        </ul>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4">
        <h4 class="mb-3 mb-md-5"> Contact Information</h4>
        <ul>
          <li>
            <div class="address"> <i class="icon"><img src="<?php bloginfo('template_directory');?>/images/map.svg"/></i>
              <p><span class="fw-bold">Address:</span> Charity Theme XYZ</p>
            </div>
          </li>
          <li>
            <div class="address"> <i class="icon"><img src="<?php bloginfo('template_directory');?>/images/phone.svg"/></i>
              <p><span class="fw-bold">Phone:</span> +91-8299248482</p>
            </div>
          </li>
          <li>
            <div class="address"> <i class="icon"><img src="<?php bloginfo('template_directory');?>/images/email.svg"/></i>
              <p><span class="fw-bold">Email:</span> info@vijsoft.com</p>
            </div>
          </li>
          <li>
            <div class="address"> <i class="icon"><img src="<?php bloginfo('template_directory');?>/images/web.svg"/></i>
              <p>https://www.vijsoft.com/wordpress/themes</p>
            </div>
          </li>
          
        
        </ul>
      </div>
      <div class="col-lg-5 col-md-12 mb-4">
        <h4 class="mb-3 mb-md-5"> Stay updated on our mission- Subscribe for updates</h4>
        <div class="input-group subscribe mb-4">
          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
          <span class="input-group-text p-0 bg-white" id="basic-addon1"><a href="#!" class="btn">Subscribe</a></span>
        </div>
        <ul class="social mt-5">
          <li><a href="https://www.facebook.com/profile.php?id=61565650888277" title="Facebook" class="me-3" target="_blank" ><img src="<?php bloginfo('template_directory');?>/images/fb.svg"/></a></li>
          <li><a href="https://x.com/CharityAfricaa" title="Twitter" target="_blank" class="me-3"><img src="<?php bloginfo('template_directory');?>/images/tw.svg"/></a> </li>
          <li><a href="https://www.linkedin.com/company/charityafrica/about/" title="Linkedin " class="me-3" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/li.svg"/></a></li>
          <li><a href="https://www.instagram.com/charityafricaa/" title="Instagram" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/in.svg"/></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<div class="container-fluid copyright py-4">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">Copyright © <script>document.write(new Date().getFullYear());</script> <span class="fw-bold bacecolor">Charity Theme</span>. All right reserved. </div>
    </div>
  </div>
</div>
<!-- Footer Close --> 
<a id="back-to-top" href="#" class="back-to-top" role="button"><i class="fa fa-chevron-up" title="Go To Top"></i></a> 
<!--PAGE CONTENT END--> 

<!-- JS Files --> 
<script src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script> 
<script src="<?php echo get_template_directory_uri();?>/js/bootstrap.bundle.min.js"></script> 
<script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.js"></script> 
<script src="<?php echo get_template_directory_uri();?>/js/custom.js"></script> 

<script>

document.addEventListener('DOMContentLoaded', (event) => {
    const image = document.getElementById('flip-image');
    let isFlipped = false;

    function flipImage() {
        if (isFlipped) {
            image.style.transform = 'rotateY(0deg)';
        } else {
            image.style.transform = 'rotateY(360deg)';
        }
        isFlipped = !isFlipped;
    }

    // Initial flip interval
    flipImage(); // Optional: Start with an initial flip

    // Flip the image every 5 seconds
    setInterval(flipImage, 5000);
});
</script>
<?php wp_footer();?>
</body>
</html>
