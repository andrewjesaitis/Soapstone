<!-- begin footer -->
</div>
<nav id="footer">
<div class="footerbox">
<?php if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar('sidebar1') ) : ?>
<?php endif; ?>
</div>

<div class="footerbox" id="center">
    <?php get_search_form(); ?>
    <?php wp_get_links(); ?>
<div id="social">
	<a href="http://www.pinboard.in/u:andrewjesaitis" class="icon" title="Pinboard">
		<img src="<?php bloginfo('template_directory'); ?>/icons/pin_32.png">
	</a>
<a href="http://www.github.com/andrewjesaitis" class="icon" title="Github">
		<img src="<?php bloginfo('template_directory'); ?>/icons/github_32.png">
	</a>
<a href="http://www.flickr.com/andrewjesaitis" class="icon" title="Flickr">
		<img src="<?php bloginfo('template_directory'); ?>/icons/flickr_32.png">
	</a>
<a href="http://www.twitter.com/andrewjesaitis" class="icon" title="Twitter">
		<img src="<?php bloginfo('template_directory'); ?>/icons/twitter_32.png">
	</a>
<a href="http://www.andrewjesaitis.com/feed" class="icon" title="Rss">
		<img src="<?php bloginfo('template_directory'); ?>/icons/rss_32.png">
	</a>
</div>
</div>

<div class="footerbox" >
<?php if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar('sidebar2') ) : ?>
<?php endif; ?>
</div>
</nav>
</div>
<?php wp_footer(); ?>
</body>
</html>
