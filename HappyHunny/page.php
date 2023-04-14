<?php get_header(); ?>

<main id="main" class="site-main">
<div class="container">
  <?php
    // Start the loop
    while (have_posts()) :
      the_post();

      // Get the content-page template part
      get_template_part('template-parts/content', 'page');

    endwhile; // End of the loop.
  ?>
    </div>

</main><!-- #main -->

<?php get_footer(); ?>
