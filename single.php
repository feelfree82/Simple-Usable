<?php get_header(); the_post(); ?>
<div id="main-container">
<div id="about-us-content"></div>



		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h4><?php the_title(); ?></h4>
			
			

			<div class="entry">
				<div class="attachment-post-thumbnail">
<?php the_post_thumbnail(); ?>
</div>
					<div class="full-text">
				<?php the_content(); ?>
			</div>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				

			</div>
			
			<?php edit_post_link('Edit this entry','','.'); ?>
			    


	<?php comments_template(); ?>


<div id="blog-sidebar">

	 <div class="more-work-links"><h5>My Work</h5>
     <?php query_posts(array('post_type=>portfolio&showposts= 5', 'orderby' => 'rand')); ?>
	 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
	   <ul><li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li></ul>
  <?php endwhile; ?>
		<?php endif; ?>			
    </div>
    
   <div class="sidebar-posts">
   <h5>Recent Posts</h5>
<ul>
<?php
$args = array( 'numberposts' => 2, 'orderby' => 'rand' );
$rand_posts = get_posts( $args );
foreach( $rand_posts as $post ) : ?>
	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>
    </div>



   
    <div class="sidebar-category">
    <h5>Categories</h5>
<ul><?php wp_list_categories('title_li='); ?></ul>

    </div>
    <!--end of sidebar-category -->
    


  </div>  
 </div>
 </div>
 
<!--end of main container -->  
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