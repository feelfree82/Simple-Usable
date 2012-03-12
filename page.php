<?php get_header(); ?>

<div id="main-container">
  <div id="about-us-content"></div>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="post" id="post-<?php the_ID(); ?>">
    <h2>
      <?php the_title(); ?>
    </h2>
    <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
    <div class="entry">
      <?php the_content(); ?>
    </div>
    <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
  </div>
  <?php endwhile; endif; ?>
  <div id="blog-sidebar">
    <div class="sidebar-posts">
      <h5>Recent Posts</h5>
      <ul>
        <?php
$args = array( 'numberposts' => 2, 'orderby' => 'rand' );
$rand_posts = get_posts( $args );
foreach( $rand_posts as $post ) : ?>
        <li><a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
          </a></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="sidebar-category">
      <h5>Categories</h5>
      <ul>
        <?php wp_list_categories('title_li='); ?>
      </ul>
    </div>
    <div class="archieve-link">
      <h5>Archives</h5>
      <?php wp_get_archives('type=daily&limit=15'); ?>
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
    <a href="#" id="push-me">Read More</a> </div>
  <!--end of About us --> 
</aside>
<?php get_footer(); ?>
