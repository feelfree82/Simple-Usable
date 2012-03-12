
<div id="theme-footer">
  <footer role="contentinfo" class="clearfix" id="footer">
    <hr class="clearfix"/>
    <span id="social-set2">Get Involved<a href="<?php echo of_get_option('twitter_link');?>"><img src="../img/images/twitter.png" title="Twitter"></a> <a href="<?php echo of_get_option('google_link');?>"><img src="../img/images/google.png"></a></span>
    <div id="themeby" role="author"><span id="social-set3"><a href="http://www.wordpress.org"><img src="../img/images/wordpress.png" title="wordpress"/></a></span> Theme by <a href="http://www.twitter.com/amitayre">Amit Ayre</a></div>
    <div id="copyrights">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></div>
    <?php echo of_get_option('google_analytics'); ?>
    <?php wp_footer(); ?>
  </footer>
  <script type="text/javascript">
 


//slider 
$(window).load(function() {
    $('.flexslider').flexslider({
          animation: "slide",
          controlsContainer: ".flex-container"
    });
  });
  
  

// iOS scale bug fix
MBP.scaleFix();

// Respond.js
yepnope({
  test : Modernizr.mq('(min-width)'),
  nope : ['js/libs/respond.min.js']
});



//masonry grid - fluid with img

$(window).load(function() {
  var $container = $('#main-container1');
  $container.masonry({
    // options
  itemSelector: '.item', 
    // setting columnWidth a fraction of the container width
  columnWidth: 210,
  gutterWidth: 40,
  //animate
  isAnimated: true,
  animationOptions: {
    duration: 750,
    easing: 'linear',
    queue: false }
      
  });
  
   $container.infinitescroll({
      navSelector  : '.navigation',    // selector for the paged navigation 
      nextSelector : '.next-posts',  // selector for the NEXT link (to page 2)
      itemSelector : '.item',     // selector for all items you'll retrieve
      loading: {
          finishedMsg: 'No more pages to load.',
          img: 'http://i.imgur.com/6RMhx.gif'
        }
      },
      // trigger Masonry as a callback
      function( newElements ) {
        // hide new items while they are loading
        var $newElems = $( newElements ).css({ opacity: 0 });
        // ensure that images load before adding to masonry layout
        $newElems.imagesLoaded(function(){
          // show elems now they're ready
          $newElems.animate({ opacity: 1 });
          $container.masonry( 'appended', $newElems, true ); 
        });
      }
    );
  
  
  
  
});

        $(function(){
        positionFooter();
        function positionFooter(){
                var padding_top = $("#footer").css("padding-top").replace("px", "");
                var page_height = $(document.body).height() - padding_top;
                var window_height = $(window).height();
                var difference = window_height - page_height;
                if (difference < 0)
                        difference = 0;
 
                $("#footer").css({
                        padding: difference + "px 0 0 0"
                })
        }
 
        $(window)
                .resize(positionFooter)
});







</script> 

  
  <!-- Don't forget analytics --> 
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2619270-6']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> 
</div>
</body></html>