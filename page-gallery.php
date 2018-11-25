<?php
/**
 * Template Name: Gallery
 *
 * @link
 *
 * @package CABS-theme
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

        $args = array(
          'child_of' => $post->ID,
          'title_li' => ''
        );

        wp_list_pages($args);

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
