<?php 
    /*
        Template Name: Home Page Template
    */


?> 

<?php get_header(); ?>

                         


<div id="main-container">
<div id="about-us-content"></div>
  <div class="flexslider">
    <ul class="slides">
    
   
      <li> <a href="<?php echo of_get_option('slider-link1'); ?>"><img src="<?php echo of_get_option('slider-image1'); ?>" /></a>
        <p class="flex-caption"><?php echo of_get_option('slider-desc1'); ?></p>
      </li>
      <li> <a href="<?php echo of_get_option('slider-link2'); ?>"><img src="<?php echo of_get_option('slider-image2'); ?>" /></a>
        <p class="flex-caption"><?php echo of_get_option('slider-desc2'); ?></p>
      </li>
      <li> <a href="<?php echo of_get_option('slider-link3'); ?>"><img src="<?php echo of_get_option('slider-image3'); ?>" /></a>
        <p class="flex-caption"><?php echo of_get_option('slider-desc3'); ?></p>
      </li>
      <li> <a href="<?php echo of_get_option('slider-link4'); ?>"><img src="<?php echo of_get_option('slider-image4'); ?>" /></a>
        <p class="flex-caption"><?php echo of_get_option('slider-desc4'); ?></p>
      </li>
    </ul>
  </div>


 <hr class="clearfix"/>

  <div id="features">
    <div id="feature1">


    <?php query_posts(array('post_type'=>'portfolio', 'showposts' => '2'));?>



					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
      <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?> &raquo;</a></h3>
      <figure><?php the_post_thumbnail(); ?></figure>
      <?php the_excerpt(); ?>
          	<?php endwhile; ?>
	<?php endif; ?>
    </div>
    <hr class="clearfix"/>

      
  </div>
  <!--end of features -->
  
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