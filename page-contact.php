<?php
/**
 * Template Name: Contact
 *
 * @link
 *
 * @package CABS-theme
 */

get_header(); ?>

	<section id="primary" class="content-area col-lg-11 col-lg-11">
		<main id="main" class="site-main" role="main">
			<div id="form">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );



				endwhile; // End of the loop.
				?>
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
