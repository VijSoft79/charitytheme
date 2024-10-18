<?php 
// Template Name:News
get_header();
if(isset($_POST['submit']))
{
 echo "test";  
 $id = wp_insert_post(
     array(
      'post_type'=>'news',
      'post_status'=>'draft',
      'post_title'=> $_POST['news_title'],
      'post_content'=> $_POST['news_desc']
     )
   );
   //-- Function to update category --//
   wp_set_object_terms($id,$_POST['news_cat'],'news_catgory');
}
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
        <form name="newsFrm" method="post"  action="">
        <table cellpadding="0" cellspacing="0" border="0"> 
        <tr><td>News Title:</td><td><input type="text" name="news_title"></td></tr>
        <tr><td>News Desc:</td><td><textarea name="news_desc" rows="5" cols="50"></textarea></td></tr>
        <tr><td>News Taxonomy:</td><td>
          <select name="news_cat">
            <option>-- Select Category --</option>
            <?php
            $newsCat = get_terms(['taxonomy'=>'news_category','hide_empty'=>false,'orderby'=>'name','order'=>'ASC','number'=>10]);
            // Check if $newsCat is not a WP_Error
            if (!is_wp_error($newsCat) && count($newsCat) > 0) {
            foreach($newsCat as $newsValue){?>
              <option value="<?php echo $newsValue->name;?>"><?php echo $newsValue->name;?></option>
              <?php }}?>         
              </select>
        </td></tr>
        <tr><td></td><td><input type="submit" value="Submit" name="submit"></td></tr>
         </table>
        </form>
      </div>

    </div>
      <!--/Col-->
    </div>
  </div>
</div>
<!--Key Benefits Close--> 

<?php get_footer();?>