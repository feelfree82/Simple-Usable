<!DOCTYPE html>
<html <?php language_attributes(); ?>><head>
	<meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="description" content="Responsive Wordpress Theme ideal for SME & Portfolio">
	<meta name="author" content="Theme by Amit Ayre">
    <meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0">

	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/flexslider.css" media="screen" />    
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<style type='text/css'>
	body {
		
		<?php $typography = of_get_option('typography');
echo 'font-family: ' . $typography['face']. '; font-size:'.$typography['size'] . ';font-style:' .$typography['style'] . '; color:'.$typography['color']. ';'?>
	}
	
	body { <?php $background = of_get_option('bg_img');
	echo 'background-image:url('.$background['image']. ');'?>
	}
	p{
		color: <?php echo of_get_option('text_color')?>;
	}
	a, a:visited{
		color: <?php echo of_get_option('links_color')?>;
	}
	.main-nav ul li a {
  color: <?php echo of_get_option('nav_link_color')?>;
    }
	
	</style>
    
    <!--[if (lt IE 9) & (!IEMobile)]>
	<script src="js/libs/selectivizr-min.js"></script>
	<![endif]-->
    

    
	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
	
	
	<script src="<?php bloginfo('template_url'); ?>/js/libs/modernizr-2.0.6.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/libs/selectivizr-min.js"></script>    
    <script src="<?php bloginfo('template_url'); ?>/js/libs/helper.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/libs/respond.min.js"></script>
    <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>



             
    

    <!-- For iPhone 4 -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/h/apple-touch-icon.png">
    <!-- For iPad 1-->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/m/apple-touch-icon.png">
    <!-- For iPhone 3G, iPod Touch and Android -->
    <link rel="apple-touch-icon-precomposed" href="img/l/apple-touch-icon-precomposed.png">
    <!-- For Nokia -->
    <link rel="shortcut icon" href="img/l/apple-touch-icon.png">
    <!-- For everything else -->
    <link rel="shortcut icon" href="/favicon.ico">  
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="apple-touch-startup-image" href="img/h/splash.png">
	
</head>

<body <?php body_class(); ?>>
	
<header role="masthead" class="clearfix">
  <nav class="main-nav">
  			<?php wp_nav_menu(); ?>

  </nav>
  <div class="clearfix"></div>
  

        
			<h1 id="branding">
    <a href="<?php bloginfo('url'); ?>"><img src="<?php echo of_get_option('logo'); ?>" alt="<?php bloginfo('name'); ?>"/>
	</a></h1>
    
            <span id="tagline"><?php bloginfo('description'); ?></span>
            <?php wp_head(); ?> 

            
            
  </header>
  
<!-- end of header -->





            

			

        
    
