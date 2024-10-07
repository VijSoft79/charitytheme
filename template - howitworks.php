<?php 
// Template Name: How it Works Template
get_header();?>

<!--How It Workss Open-->
<div class="container-fluid bg-white pt-80 pb-80 request_access" id="requestaccess">
  <div class="container">
    <div class="row">
      <?php get_sidebar();?>
      <div class="col-md-12">
        <h2 class="section-title mb-3 mb-lg-5 pb-4 text-center">How It Works</h2>
      </div>
      <div class="col-md-4 col-sm-6 mb-3">
        <div class="steps">
          <h4 class="mb-4 mb-lg-5">STEP 01</h4>
          <div class="icon">
            <img class="ing-fluid" src="<?php bloginfo('template_directory');?>/images/step1.svg" title="Fund Your Wallet"/>
          </div>
          <h6>Fund Your Wallet</h6>
          <p>Fund your wallet using secure and convenient methods powered by our Payment Gateway.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-3  mt-4 mt-sm-0">
        <div class="steps">
          <h4 class="mb-4 mb-lg-5">STEP 02</h4>
          <div class="icon">
            <img class="ing-fluid" src="<?php bloginfo('template_directory');?>/images/step2.svg" title="Convert to Token"/>
          </div>
          <h6>Convert to Tokens</h6>
          <p>Convert your funds into unique tokens that can be sent to anyone in need, eliminating the requirement for their bank details.</p>
        </div>
      </div>
      <div class="col-md-4 mb-3 mt-4 mt-md-0">
        <div class="steps">
          <h4 class="mb-4 mb-lg-5">STEP 03</h4>
          <div class="icon">
            <img class="ing-fluid" src="<?php bloginfo('template_directory');?>/images/step3.svg" title="Send & Receive"/>
          </div>
          <h6>Send & Receive</h6>
          <p>Easily distribute tokens to multiple recipients simultaneously. Recipients can convert these tokens back into funds in their wallets and transfer them to their bank accounts.</p>
        </div>
      </div>

<?php get_footer();?>