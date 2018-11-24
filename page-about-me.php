<?php
/**
 * Template Name: About Me
 *
 * @link
 *
 * @package CABS-theme
 */

get_header(); ?>

<?php
while ( have_posts() ) : the_post();

  get_template_part( 'template-parts/content', 'page' );


endwhile; // End of the loop.
?>

<!--
<div id="about-me-pic">
  <div class="headshot headshot1">
    test
  </div>
</div>

<script>
  let headshotImages = document.querySelectorAll('.headshot');
  headshotImages[0].style.display = "block";
</script>
-->


<?php
get_sidebar();
get_footer();
