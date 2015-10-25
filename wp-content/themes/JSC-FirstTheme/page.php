<?php get_header(); ?>

<div id="main">
	<section id="portfolio" class="two">
		<div class="container">
PAGE
			 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<header>
					<h2><?php the_title(); ?></h2>
				</header>

				<p><?php the_content(); ?></p>

			<?php endwhile; else : ?>
			  <p><?php _e( 'Sorry, no pages found' ); ?></p>
			<?php endif; ?>
			

		</div>
	</section>
</div>

<?php get_footer(); ?>