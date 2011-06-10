<?php get_header(); ?>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
		        <h3 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		        <h4>
		            <time datetime=<?php the_date_xml(); ?> pubdate><?php echo get_the_date(); ?></time> :: 
		            <div class="meta"><?php the_category(', ') ?></div>
		        </h4>
	        </header>
			<div class="entry">
				<?php the_content(); ?>
			</div>
		</article>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<?php get_footer(); ?>
