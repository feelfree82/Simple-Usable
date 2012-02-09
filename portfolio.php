<?php
/**
 * Template Name: Portfolio Template

 */


?>
<?php get_header(); ?>

<div id="main-container"><div id="about-us-content"></div>
  <div id="main-container1">
    <?php
global $wp_query;
$paged = (get_query_var('paged')) ? get_query_var('paged') :1;
$wp_query->get('paged');
$wp_query = new WP_Query(
array(
        'post_type' => 'portfolio',
         'posts_per_page' => 8,
        'paged' => $paged
     ) 
 ); 
 
 ?>
    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
    <?php	
		$custom = get_post_custom($post->ID);
		$website_url = $custom["website_url"][0];
	?>
    <div class="item"> <a href="<?php the_permalink() ?>">
      <?php the_post_thumbnail(); ?>
      </a>
      <h5><a href="<?php the_permalink() ?>">
        <?php the_title(); ?>
      </h5>
      </a>
      <?php the_excerpt(); ?>
    </div>
    <?php endwhile; ?>   

  </div>
  <!-- #main-container1 --> 
    <div class="navigation">
      <div class="next-posts">
        <?php next_posts_link('Newer Entries') ?>
      </div>
      <div class="prev-posts">
        <?php previous_posts_link('Older Entries') ?>
      </div>
    </div>  
</div>
<!-- #main-container -->
<aside>
<hr class="clearfix"/>
  <div id="about-us"> <a href="#">
    <h5>About</h5>
    </a>
    <p><?php echo of_get_option('about_us_excerpt')?></p>
    <input type="hidden" name="greeting" id="greeting" value="<?php echo of_get_option('about_us_content')?>" />
	<a href="#" id="push-me">Read More</a>

   
  </div>

  <!--end of About us --> 
</aside>


<?php get_footer(); ?>
