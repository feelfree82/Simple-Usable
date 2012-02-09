<?php get_header(); ?>
<div id="main-container">
<div id="about-us-content"></div>

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2>Archive for <?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2>Archive for <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2>Archive for <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2>Author Archive</h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2>Blog Archives</h2>
			
			<?php } ?>

			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

			<?php while (have_posts()) : the_post(); ?>
			
				<div <?php post_class() ?>>
				
					<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					
					<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

					<div class="entry">
						<?php the_content(); ?>
					</div>

				</div>

			<?php endwhile; ?>

			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
			
	<?php else : ?>

		<h2>Nothing found</h2>

	<?php endif; ?>

<div id="blog-sidebar">
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
    

     
	    <div class="archieve-link"><h5>Archives</h5><?php wp_get_archives('type=daily&limit=15'); ?></div>
  
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