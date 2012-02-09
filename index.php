

                         


<div id="main-container">
<?php query_posts('posts_per_page=1'); ?> 
   
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

        
  <div id = "recent" class="blog">
 <article><?php the_post_thumbnail(); ?>
      <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
      <p id="excerpt"><?php the_excerpt(); ?></p></article>
      
      
      
      	<?php endwhile; ?>
		<?php endif; ?>
      
</div>

  </div>
  <!--end of recent blogs --> 
  


  
</div>
<!--end of main container -->



<?php get_footer(); ?>