<?php get_header();?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article class="post<?php the_category_unlinked(' '); ?>">
	<header>
		<h3 class="storytitle"><a class="title" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		<h4>
		    
		</h4>
	</header>
	<?php the_content('<p>[Read More...]</p>'); ?>

    <footer>
	    <h5>
	    	<time datetime=<?php the_date_xml(); ?> pubdate><?php echo get_the_date(); ?></time> :: 
		    <div class="meta"><?php the_category('',', ',', ') ?> <?php the_tags('', ', ', ''); ?> </div>
	    </h5>
    </footer>
</article>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<nav id="postpage">
    <?php posts_nav_link(' ::  ', __('&laquo; Newer'), __('Older &raquo;')); ?>
</nav>

<?php get_footer(); ?>
