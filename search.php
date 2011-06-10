<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results</h2>

		<?php while (have_posts()) : the_post(); ?>

			<article class="result">
				<h3 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				<h4>
		            <time datetime=<?php the_date_xml(); ?> pubdate><?php echo get_the_date(); ?></time> :: 
		            <div class="meta"><?php the_category(', ') ?></div>
		        </h4>
            </article>

		<?php endwhile; ?>

		<nav>
			<div class="alignleft"><?php next_posts_link('&laquo; Older') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer &raquo;') ?></div>
		</nav>

	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<?php get_search_form(); ?>

	<?php endif; ?>

<?php get_footer(); ?>
