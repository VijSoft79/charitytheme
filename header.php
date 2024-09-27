<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Charity Theme | Home</title>
<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.png" />
<!-- CSS Files -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"><link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri();?>/css/owl.carousel.min.css" rel="stylesheet" >
<link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri();?>/css/media.css" rel="stylesheet">
</head>
<body>

<!-- NAV OPEN -->
<nav class="navbar navbar-expand-lg bg-light sticky-top py-0">
  <div class="container-sm"> <a class="navbar-brand" href="index.html" id="spinner"><img src="<?php echo get_header_image();?>" id="flip-image" title="Charity Theme"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle  navigation"><i class="fa fa-bars fs-3 blue_text"></i></button>
    <div class="collapse navbar-collapse" id="navbarScroll">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary-menu',
        'menu_class' => 'navbar-nav ms-auto my-2 my-lg-0',
        'container' => 'ul',
        'items_wrap' => '<ul id="%1$s" class="%2$s" style="--bs-scroll-height: 300px;">%3$s</ul>',
        'link_before' => '<span class="nav-link">',
        'link_after' => '</span>',
        'fallback_cb' => false,
    ));
    ?>
    </div>
  </div>
</nav>
<!--NAV CLOSE--> 