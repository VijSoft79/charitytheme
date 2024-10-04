<?php
if ( have_comments() ) :
    // Display the list of comments
    wp_list_comments();
    
    // Comments pagination
    the_comments_navigation();
endif;

// Display the comment form
comment_form();
?>
