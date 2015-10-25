<?php
/*
Template Name: Blog Posts
*/ 
?>
<?php get_header(); ?>

<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

<div id="main">
	<section id="portfolio" class="two">
		<div class="container">
BLOG
			 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<header>
					<h2><?php the_title(); ?></h2>
				</header>

				<p><?php the_content(); ?></p>

			<?php endwhile; ?>
			 	<div class="navigation">
					<span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
				</div><!-- /.navigation -->

			<?php else: ?>

			  <p><?php _e( 'Sorry, no posts found' ); ?></p>
			
			<?php endif; wp_reset_query(); ?>
			
			

		</div>
	</section>
</div>

<?php get_footer(); ?>